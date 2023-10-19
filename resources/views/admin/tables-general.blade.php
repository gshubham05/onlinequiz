@extends('layouts.master')

@section('main-content')


    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active1">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col">



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col"> Short Description</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Multiple Choice Single Answers</td>
                    <td>This question type is easy to set up and is the most frequent MCQ question in online exams. Users are allowed to pick just one answer from a list of given options.</td>
                    <td><span class="active">Active</span></td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Multiple Choice Multiple Answers</td>
                    <td>Multiple Choice Multiple Answers type question allows users to select one or several answers from a list of given options.
                    </td>
                    <td><span class="active">Active</span></td>

                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>True or False</td>
                    <td>A true or false question consists of a statement that requires a true or false response. We can also format the options such as: Yes/No, Correct/Incorrect, and Agree/Disagree.
                    </td>
                    <td><span class="active">Active</span></td>

                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Short Answers</td>
                    <td>Short answer questions allow users to provide text or numeric answers. These responses will be validated against the provided possible answers.
                    </td>
                    <td><span class="active">Active</span></td>

                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Match the Following
                    </td>
                    <td>Multiple Choice Multiple Answers type question allows users to select one or several answers from a list of given options.	</td>
                    <td><span class="active">Active</span></td>

                  </tr>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>




        </div>
      </div>
    </section>

    @endsection
