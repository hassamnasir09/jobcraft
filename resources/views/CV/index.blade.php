@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="" style="    margin-left: 1vw;">
    

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header flex flex-row content-between" style="margin-top:50px;margin-bottom:50px">
                        <h3 class="card-title " style="display: inline">Users CVs</h3>
                      
                            <a href="{{ route('user.profile.create') }}" class="add-btn btn btn-success f-right" style="float: right">
                                 Add New
                            </a>
                       
                    </div>
                    <div class="card-body">
                        <table id="user_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Profile Photo</th>
                                    <th>Title</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @if (count($users_data)==0)
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <h5>No record Found</h5>
                                        </td>
                                    </tr>
                                @endif
                                @foreach ($users_data as $user)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>
                                            <img class="profile box-image-preview img-fluid img-circle elevation-2" src="{{ isset($user['personal_info']['image_path']) && !empty($user['personal_info']['image_path']) ? asset('assets/images/'. $user['personal_info']['image_path'])  : asset('assets/images/user-thumb.jpg') }}"
                                            alt="" style="height:40px; width:40px;" />
                                        </td>
                                        <td>{{ $user['personal_info']['profile_title'] }}</td>
                                        <td>{{ $user['personal_info']['first_name'] }}</td>
                                        <td>{{ $user['personal_info']['last_name'] }}</td>
                                        <td>{{ $user['contact_info']['email'] }}</td>
                                        <td align="center">
                                            <div class="d-flex flex-row justify-content-around">
                                                <a class="view_btn"
                                                    href="{{ route('user.profile.view', $user['personal_info']['id']) }}"
                                                    title="View Profile">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="edit_btn"
                                                    href="{{ route('edit', $user['personal_info']['id']) }}"
                                                    title="Edit Profile">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('cv.destroy', $user['personal_info']['id']) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    <button type="submit"
                                                        class="del_btn" title="Delete Profile">
                                                        <i class="fas fa-user-minus text-danger"></i>
                                            </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr</th>
                                    <th>Profile Photo</th>
                                    <th>Title</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <div class="grid">
            <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Snowy Mountains">
              <div class="card__content">
                <h1 class="card__header">Basic</h1>
                
                <button class="card__btn">View</span></button>
              </div>
            </div>
            <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1485160497022-3e09382fb310?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Desert">
              <div class="card__content">
                <h1 class="card__header">Minimalist</h1>
                
                <button class="card__btn">View</span></button>
              </div>
            </div>
            <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1506318164473-2dfd3ede3623?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3300&amp;q=80" alt="Canyons">
              <div class="card__content">
                <h1 class="card__header">Creative</h1>
               
                <button class="card__btn">View</span></button>
              </div>
            </div>
          </div>




        
    </div>
  </div>
</div>
<style>



.grid {
  display: grid;
  width: 114rem;
  grid-gap: 3rem;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
}
@media (max-width: 60em) {
  .grid {
    grid-gap: 3rem;
  }
}
.grid .card {
  display: flex;
  flex-direction: column;
  background-color: #fff;
  border-radius: 0.4rem;
  overflow: hidden;
  box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.2s;
}
.grid .card:hover {
  transform: translateY(-0.5%);
  box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.2);
}
.grid .card__img {
  display: block;
  width: 100%;
  height: 18rem;
  object-fit: cover;
}
.grid .card__content {
  display: grid;
  grid-template-rows: auto 1fr auto;
  grid-row-gap: 2rem;
  padding: 2rem;
  height: 100%;
}
.grid .card__header {
  font-size: 3rem;
  font-weight: 500;
  color: #0d0d0d;
}
.grid .card__text {
  font-size: 1.5rem;
  letter-spacing: 0.1rem;
  line-height: 1.7;
  color: #3d3d3d;
  margin-bottom: 2.5rem;
}
.grid .card__btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 2rem;
  text-align: center;
  color: #3363ff;
  background-color: #e6ecff;
  border: none;
  border-radius: 0.4rem;
  transition: 0.2s;
  cursor: pointer;
}
.grid .card__btn span {
  margin-left: 1rem;
  transition: 0.2s;
}
.grid .card__btn:hover, .grid .card__btn:active {
  background-color: #dce4ff;
}
.grid .card__btn:hover span, .grid .card__btn:active span {
  margin-left: 1.5rem;
}
</style>
@endsection
