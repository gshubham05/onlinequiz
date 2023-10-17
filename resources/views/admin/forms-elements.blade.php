@extends('layouts.master')

@section('main-content')
    <div class="pagetitle">
        <h1>Add Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h2>
                            <p class="card-title text-center">Category</p>
                        </h2>

                        <!-- General Form Elements -->
                        <form action="{{ route('category.save') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='title'>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name='description'></textarea>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <label class="col-sm-2 col-form-label">Submit Button</label> --}}
                    <div class="d-grid gap-2 col-6 mx-auto justify-content">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="alert">Save</button>
                    </div>
                </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
