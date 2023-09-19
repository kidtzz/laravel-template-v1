@extends('layouts/contentNavbarLayout')

@section('title', 'setting page role admin')

@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="d-flex justify-content-between">
    <h5 class="card-header">Setting Home/AboutUs/News</h5>
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
          <th>Judul</th>
          <th>Sub Judul</th>
          <th>Deskripsi</th>
          <th>Author</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
          <td>Prjx Lorem ipsum</td>
          <td>Lorem, ipsum dolor amet ...</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
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
        <tr>
          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
          <td>Prjx Lorem ipsum</td>
          <td>Lorem, ipsum dolor amet ...</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
          <td>Prjx Lorem ipsum</td>
          <td>Lorem, ipsum dolor amet ...</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>

            </ul>
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong></td>
          <td>Prjx Lorem ipsum</td>
          <td>Lorem, ipsum dolor amet ...</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

<!-- Home Layout -->
<hr class="my-2">
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Home</h5> <small class="text-muted float-end">Default label</small>
      </div>
      <div class="card-body">
        <form enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label" for="basic-default-banner">Banner Heroku</label>
            <img class="d-block img-fluid" src="{{asset('assets/img/elements/2.jpg')}}" alt="Second slide" />
            <input class="mt-3 form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-user">Nama User </label>
            <input type="text" class="form-control" id="basic-default-user" placeholder="Jhon Doe" readonly />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Judul </label>
            <input type="text" class="form-control" id="basic-default-fullname" placeholder="Dream Team Project" />
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-sub-judul">sub-judul</label>
            <input type="text" class="form-control" id="basic-default-sub-judul" placeholder="ACME Inc." />
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="summernote" placeholder="Description" rows="5"></textarea>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- About Us Layout -->
<hr class="my-2">
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">About Us</h5> <small class="text-muted float-end">Default label</small>
      </div>
      <div class="card-body">
        <form enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label" for="basic-default-banner">Image</label>
            <img class="d-block img-fluid" src="{{asset('assets/img/elements/3.jpg')}}" alt="Second slide" />
            <input class="mt-3 form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-title">Title</label>
            <input type="text" class="form-control" id="basic-default-title" placeholder="Jhon Doe" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-sub-title">Sub Title </label>
            <input type="text" class="form-control" id="basic-default-sub-title" placeholder="Dream Team Project" />
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="summernote" placeholder="Description" rows="5"></textarea>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- News Layout -->
<hr class="my-2">
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">News</h5> <small class="text-muted float-end">Default label</small>
      </div>
      <div class="card-body">
        <form enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label" for="basic-default-banner">Image</label>
            <img class="d-block img-fluid" src="{{asset('assets/img/elements/1.jpg')}}" alt="Second slide" />
            <input class="mt-3 form-control" type="file" id="formFile">
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-user">Nama User </label>
            <input type="text" class="form-control" id="basic-default-user" placeholder="Jhon Doe" readonly />
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-title">Title</label>
            <input type="text" class="form-control" id="basic-default-title" placeholder="Jhon Doe" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-sub-title">Sub Title </label>
            <input type="text" class="form-control" id="basic-default-sub-title" placeholder="Dream Team Project" />
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="summernote" placeholder="Description" rows="5"></textarea>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection