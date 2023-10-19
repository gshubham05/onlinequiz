@extends('layouts.master')

@section('main-content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Questions</h1>

    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">


        <div class="col">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Questions Form -->
              <form class="row g-3">
                <div class="flex flex-col w-full mb-6">
                    <label class="pb-2 text-sm font-semibold text-gray-800">Choose Skill
                        <span style="color: red">*</span>
                    </label>
                    <div>
                        <select>
                            <option value="">Search Skills</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    <div>
                        <button type="submit" value="Choose File"> Choose File</button>
                        <span>No File Chosen</span>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Upload File </button>
                    </div>
                </div>




                <div class="col-12">
                    <table class="table">
                        <tr>
                            <th class="col-8"></label>Name</label></th>
                            <th class="col-4"></label>Acceptable Code</label></th>
                        </tr>
                    </table>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Questions Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
