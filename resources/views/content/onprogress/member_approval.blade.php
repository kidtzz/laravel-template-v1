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
            <div class="d-flex">
              <a class="p-2 btn m-1 btn-success" title="Approve" data-bs-toggle="tooltip">
                <i class=" text-white bx bx-check me-1">
                </i>
              </a>
              <a class="p-2 btn m-1 btn-danger " title="Reject" data-bs-toggle="tooltip"><i class=" text-white bx bx-x me-1"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<hr class="my-5">

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Detail Approval <span class="badge bg-label-warning me-1">Pending</span></h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
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

          <div class="mb-3">
            <label for="formFile" class="form-label">Upload Signed Document </label>
            <input class="form-control" type="file" id="formFile">
          </div>

          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Approve</button>
            <button type="reset" class="btn btn-outline-secondary">Reject</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Pills -->

<hr class="my-5">

<div class="row">
  <div class="col-lg-12 ">
    <div class="p-3 card">
      <h5 class="c">Composer List Lagu Barat - <span class="badge bg-label-warning me-1">Pending</span></h5>
      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3 mx-3" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-document" aria-controls="navs-pills-top-document" aria-selected="true">Document</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-detail" aria-controls="navs-pills-top-detail" aria-selected="false">Detail</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-recipients" aria-controls="navs-pills-top-recipients" aria-selected="false">Recipients</button>
          </li>
        </ul>
        <div class="tab-content" style="box-shadow: none;">
          <div class="tab-pane fade show active" id="navs-pills-top-document" role="tabpanel">
            <p>
              Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
              claw
              candy topping.
            </p>
            <embed src="https://drive.google.com/viewerng/viewer?embedded=true&url=http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&scrollbar=0" width="100%" height="800px" />

          </div>
          <div class="tab-pane fade" id="navs-pills-top-detail" role="tabpanel">
            <p>
              Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
              halvah
              tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
            </p>
            <p class="mb-0">
              Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
              liquorice caramels.
            </p>
          </div>
          <div class="tab-pane fade" id="navs-pills-top-recipients" role="tabpanel">
            <p>
              Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
              bears
              cake chocolate.
            </p>
            <p class="mb-0">
              Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
              sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
              jelly.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Pills -->










@endsection