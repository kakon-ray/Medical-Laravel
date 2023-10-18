@extends('layouts.adminapp')
@section('title','Admin')
@section('content')


  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="#"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <a href="{{'/admin'}}" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Appointment Request</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-globe fa-fw me-3"></i><span>International</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-building fa-fw me-3"></i><span>Partners</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
        >
        <a type="button" id="arthilogout" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-money-bill fa-fw me-3"></i><span>Logout</span></a
        >
      </div>
    </div>
  </nav>
        </div>
        <div class="col-lg-9">
        <table class="table table-bordered border-primary">
                          <!-- this is table head -->
                        <thead class="table-dark ">
                          <tr>
                          <th class="th-sm">Customer Name</th>
                            <th class="th-sm">Categorie</th>
                            <th class="th-sm">Phonenumber</th>
                            <th class="th-sm">Date</th>
                           
                          </tr>
                         </thead>
                       <!-- this is table body  end-->

                       <tbody>
                       @foreach ($all_appointment as $item)
                            <tr>
                       
                                <td class="th-sm "><b>{{$item->name}}</b></td>
                                <td class="th-sm "><b>{{$item->categorie}}</b></td>
                                <td class="th-sm "><b>{{$item->phonenumber}}</b></td>
                                <td class="th-sm "><b>{{$item->date_of_birth}}</b></td>
                          

                                <td class="th-sm ">
                                <button onclick="remove_appointment({!!$item->id!!})"  class="btn btn-danger">Delete</button>
                                </td>
                              
                              
                              </tr>
                     @endforeach
            </tbody>
                       <!-- this is table body  end-->

                        </table>
        </div>
      </div>
    </div>
  </main>

  <script>

const remove_appointment = (id) => {
 
 axios
  .get("/remove-appointment", { params: { id: id } })
.then(function (response) {

  if(response.status == 200 && response.data == 1){
    Swal.fire({
              icon: "success",
              title: "Delete This Appointment",
              text: "Thanks",
              timer: 1500,
            });
    location.reload();

  }

   })
.catch(function (error) {
alert("Errore");
});


}
  </script>

@endsection()