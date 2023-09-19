@extends('layouts/contentNavbarLayout')

@section('title', 'Member Approval')

@section('content')


<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="d-flex justify-content-between">
    <h5 class="card-header">List Member Approval</h5>
    <div class="table-search p-3">
      <form class="d-flex">
        <div class="input-group">
          <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
          <input type="text" class="form-control" placeholder="Search..." />
        </div>
      </form>
    </div>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Judul</th>
          <th>Document</th>
          <th>Upload Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Albert Project</strong></td>
          <td>Composer List Lagu Barat</td>
          <td>Not Found</td>
          <td>Jul 04, 2023 09:35</td>
          <td><span class="badge bg-label-warning me-1">Pending</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<hr class="mt-5">

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Detail Approval <span class="badge bg-label-warning me-1">Pending</span></h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-12">
              <label for="fullname" class="form-label">Full Name</label>
              <input class="form-control" type="text" name="fullname" id="fullname" value="Alex Jon" readonly />
            </div>
            <div class="mb-3 col-md-12">
              <label for="judul" class="form-label">Judul</label>
              <input class="form-control" type="text" name="judul" id="judul" value="Composer List Lagu Barat" readonly />
            </div>

            <div class="mb-3 col-md-12">
              <label for="exampleFormControlSelect1" class="form-label">Role</label>
              <input class="form-control" type="text" name="Role" id="Role" value="Composer" readonly />
            </div>

            <div class="mb-3 col-md-12">
              <label for="organization" class="form-label">Organization</label>
              <input type="text" class="form-control" id="organization" name="organization" value="Avengers" readonly />
            </div>
          </div>

          <div class="mb-3">
            <label for="formFile" class="form-label">Upload Document</label>
            <input class="form-control" type="file" id="formFile">
          </div>

          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection