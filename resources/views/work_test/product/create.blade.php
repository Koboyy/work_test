@extends('layouts.app')

@section('title', 'customers')

@section('active', 'customers')

@push('css')

@endpush

@push('js')

@endpush

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('work_test.products.index') }}">Home</a></li>
        <li class="breadcrumb-item active">@yield('title')</li>
    </ol>
@endsection

@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('work_test.products.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Product Code</label>
                        <input type="text" name="code" required 
                            maxlength="10"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="name" required 
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="description" 
                            cols="5" rows="5" 
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="number" name="stock" required 
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" required 
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                            @component('work_test.component.scaff.inp_categories', [
                                'categories' => $categories, 'name' => 'category_id'
                            ]) @endcomponent
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        {{ csrf_field() }}
                        @component('work_test.component.scaff.btn_submit_store') @endcomponent
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection