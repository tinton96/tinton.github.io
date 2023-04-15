<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\BulkDestroyTeam;
use App\Http\Requests\Admin\Team\DestroyTeam;
use App\Http\Requests\Admin\Team\IndexTeam;
use App\Http\Requests\Admin\Team\StoreTeam;
use App\Http\Requests\Admin\Team\UpdateTeam;
use App\Models\Team;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;


class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTeam $request
     * @return array|Factory|View
     */
    


    public function index(IndexTeam $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Team::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nama', 'published_at', 'enabled'],

            // set columns to searchIn
            ['id', 'nama', 'slug', 'biodata']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.team.index', ['data' => $data]);
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.team.create');

        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTeam $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTeam $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Team
        $team = Team::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/teams'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param Team $team
     * @throws AuthorizationException
     * @return void
     */
    public function show(Team $team)
    {
        $this->authorize('admin.team.show', $team);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Team $team
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Team $team)
    {
        $this->authorize('admin.team.edit', $team);


        return view('admin.team.edit', [
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTeam $request
     * @param Team $team
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTeam $request, Team $team)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Team
        $team->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/teams'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $team
            ];
        }

        return redirect('admin/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTeam $request
     * @param Team $team
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTeam $request, Team $team)
    {
        $team->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTeam $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTeam $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Team::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
