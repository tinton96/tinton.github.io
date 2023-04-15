<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pegawai\BulkDestroyPegawai;
use App\Http\Requests\Admin\Pegawai\DestroyPegawai;
use App\Http\Requests\Admin\Pegawai\IndexPegawai;
use App\Http\Requests\Admin\Pegawai\StorePegawai;
use App\Http\Requests\Admin\Pegawai\UpdatePegawai;
use App\Models\Pegawai;
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

class PegawaiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPegawai $request
     * @return array|Factory|View
     */
    public function index(IndexPegawai $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Pegawai::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nama_pegawai', 'no_telpon', 'tanngal_lahir', 'status_karyawan', 'jabatan'],

            // set columns to searchIn
            ['id', 'nama_pegawai', 'no_telpon', 'alamat', 'status_karyawan', 'jabatan']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.pegawai.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.pegawai.create');

        return view('admin.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePegawai $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePegawai $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Pegawai
        $pegawai = Pegawai::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pegawais'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pegawais');
    }

    /**
     * Display the specified resource.
     *
     * @param Pegawai $pegawai
     * @throws AuthorizationException
     * @return void
     */
    public function show(Pegawai $pegawai)
    {
        $this->authorize('admin.pegawai.show', $pegawai);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pegawai $pegawai
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Pegawai $pegawai)
    {
        $this->authorize('admin.pegawai.edit', $pegawai);


        return view('admin.pegawai.edit', [
            'pegawai' => $pegawai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePegawai $request
     * @param Pegawai $pegawai
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePegawai $request, Pegawai $pegawai)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Pegawai
        $pegawai->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/pegawais'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/pegawais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPegawai $request
     * @param Pegawai $pegawai
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPegawai $request, Pegawai $pegawai)
    {
        $pegawai->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPegawai $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPegawai $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Pegawai::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
