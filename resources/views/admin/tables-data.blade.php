@extends('layouts.master')

@section('main-content')
    <div class="pagetitle">
        {{-- <h1>Question Bank</h1> --}}
        <section>
            <div class="container mx-auto pt-4 px-4 sm:px-6 lg:px-8">
              <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
                <div><h4 class="page-heading">Questions</h4></div>
                <div class="mb-6 sm:mb-0 sm:mt-0">
                  <div class="flex gap-4 items-center">
                    <a
                      href="https://qwiktest-demo.nearchip.com/admin/import-questions"
                      class="qt-btn qt-btn-primary">
                      Import Questions
                    </a>
                    <div class="relative">
                      <div>
                        <button class="qt-btn qt-btn-success">New Question</button>
                      </div>
                      <div class="fixed inset-0 z-40" style="display: none"></div>
                      <div
                        class="absolute z-50 mt-2 shadow rounded w-48 rtl:origin-top-left rtl:left-0 ltr:origin-top-right ltr:right-0"
                        style="display: none">
                        <div class="rounded-sm ring-1 ring-black ring-opacity-5 py-1 bg-white">
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=MSA"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                              Multiple Choice Single Answer
                            </a>
                          </div>
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=MMA"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            >
                              Multiple Choice Multiple Answers
                            </a>
                          </div>
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=TOF"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            >
                              True or False
                            </a>
                          </div>
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=SAQ"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            >
                              Short Answer
                            </a>
                          </div>
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=MTF"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            >
                              Match the Following
                            </a>
                          </div>
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=ORD"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            >
                              Ordering/Sequence
                            </a>
                          </div>
                          <div>
                            <a
                              href="https://qwiktest-demo.nearchip.com/admin/questions/create?question_type=FIB"
                              class="text-sm block px-4 py-2 leading-5 text-gray-700 hover:bg-gray-100 ltr:text-left rtl:text-right focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            >
                              Fill in the Blanks
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        {{-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Questions</li>
            </ol>
        </nav> --}}
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
                                    <th scope="col">Code</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Skill</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                <tr>
                                    <th scope="col"><input class="inputtag" type="text" class="narrow-input"></th>
                                    <th scope="col"><input class="inputtag" type="text"></th>
                                    <th scope="col"><select class="inputtag">
                                            <option value="">Search Type</option>
                                            <option value="1">Multiple Choice Single Answer</option>
                                            <option value="2">Multiple Choice Multiple Answers</option>
                                            <option value="3">True or False</option>
                                            <option value="4">Short Answer</option>
                                            <option value="5">Match the Following</option>
                                            <option value="6">Ordering/Sequence</option>
                                            <option value="7">Fill in the Blanks</option>
                                        </select> </th>
                                    <th scope="col"><input class="inputtag" type="text"></th>
                                    <th scope="col"><input class="inputtag" type="text"></th>
                                    <th scope="col"><input class="inputtag" type="text"></th>
                                    <th scope="col"><select class="inputtag">
                                            <option value="" >Search Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">In-active</option>
                                        </select></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Web Development</td>
                                    <td>HTML</td>
                                    <td>MCQ</td>
                                    <td>Test</td>
                                    <td>Test2</td>
                                    <td>Test3</td>
                                    <td><span class="badge rounded-pill bg-danger">In-Active</span></td>
                                    <td>
                                        {{-- <button type="submit" class="btn btn-success" name="add">add</button> --}}
                                        <button type="submit" class="btn btn-warning" name="update" data-bs-toggle="modal"
                                            data-bs-target="#ExtralargeModal"><i
                                                class="fa-regular fa-pen-to-square"></i></button>
                                        <button type="submit" class="btn btn-danger" name="delete"><span
                                                class="pi pi-trash p-button-icon"></button>
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
                                <button type="submit" class="btn btn-warning inputtag">Update</button>
                                <button type="reset" class="btn btn-secondary inputtag">Reset</button>
                            </div>
                        </form><!-- End No Labels Form -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Extra Large Modal-->
@endsection
