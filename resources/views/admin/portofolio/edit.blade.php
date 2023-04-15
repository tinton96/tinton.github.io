@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.portofolio.actions.edit', ['name' => $portofolio->id]))

@section('body')

    <div class="container-xl">

            <portofolio-form
                :action="'{{ $portofolio->resource_url }}'"
                :data="{{ $portofolio->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-pencil"></i> {{ trans('admin.portofolio.actions.edit', ['name' => $portofolio->id]) }}
                                </div>
                                <div class="card-body">
                                    @include('admin.portofolio.components.form-elements')
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 col-xl-5 col-xxl-4">
                            @include('admin.portofolio.components.form-elements-right', ['showHistory' => true])
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary fixed-cta-button button-save" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-save'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>

                    <button type="submit" style="display: none" class="btn btn-success fixed-cta-button button-saved" :disabled="submiting" :class="">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-check'"></i>
                        <span>{{ trans('brackets/admin-ui::admin.btn.saved') }}</span>
                    </button>
                     
                </form>

        </portofolio-form>

    
</div>

@endsection