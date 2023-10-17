@extends('layouts.master')

@section('main-content')
    <div class="pagetitle">
        <h1>Question Bank</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Questions</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Questions List</h5>
                        {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}

                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Questions</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Tag</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Web Development</td>
                                    <td>HTML</td>
                                    <td>Hypertext Markup Language</td>
                                    <td><span class="badge rounded-pill bg-danger">Difficult</span></td>
                                    <td>
                                        {{-- <button type="submit" class="btn btn-success" name="add">add</button> --}}
                                        <button type="submit" class="btn btn-warning" name="update" data-bs-toggle="modal"
                                            data-bs-target="#ExtralargeModal">Update</button>
                                        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Web Development</td>
                                    <td>CSS`</td>
                                    <td>Cascading Style Sheets </td>
                                    <td><span class="badge rounded-pill bg-success">Easy</span></td>
                                    <td>
                                        {{-- <button type="submit" class="btn btn-success" name="add">add</button> --}}
                                        <button type="submit" class="btn btn-warning" name="update" data-bs-toggle="modal"
                                            data-bs-target="#ExtralargeModal">Update</button>
                                        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Extra Large Modal -->
    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Question Update Form </h5>

                        <!-- No Labels Form -->
                        <form class="row g-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Type your Question">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Option 1">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Option 2">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Option 3">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Correct Answer">
                            </div>
                            <div class="col-md-4">
                                <select id="inputState" class="form-select">
                                    <option selected>Web Development</option>
                                    <option>Data Science</option>
                                    <option>Mobile Development</option>
                                    <option>Programming Languages</option>
                                    {{-- <option>...</option> --}}
                                    {{-- <option>...</option> --}}
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning">Update</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End No Labels Form -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Extra Large Modal-->
@endsection
