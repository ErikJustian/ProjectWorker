
@extends('layouts.employer.employernavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <form action="postedjob/end" method='post'>
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title top-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              @csrf
              <h5 class="lead text-primary middle-title">Personal Driver</h5>
              <!-- Title -->
              <div class="form-group">
                <label for="complain" class="text-dark">Complain</label>
                <input type="text" class="form-control" id="complain" name="complain" placeholder="Complain">
              </div>
              <!-- Rating -->
              <input type="hidden" id="job_id" name="job_id">
              <label for="stars" class="text-dark">Rating</label>
              <div class="form-group">
                <!-- Star start -->
                <div class='rating'>
                  <label>
                    <input type="radio" name="stars" value="1" required/>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="2" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="3" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="4" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="5" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                </div>
                <!-- Star end -->
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="btn-referral" class="btn btn-primary">End Job</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- Modal End -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-dark">Job Posted</h1>
        <div class="col-md-12">
          <div class="table-responsive-md">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Job Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($jobs->count() == 0)
                <tr>
                    <td>-</td>
                    <td>No job title</td>
                    <td>No status</td>
                    <td>
                      No Action
                    </td>
                  </tr>
                @else
                  <!-- List -->
                  @foreach($jobs as $job)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$job['title']}}</td>
                    <td>{{$job['status']}}</td>
                    <td class="">
                      <!-- Button action -->
                      @if($job['status'] == 'Awaiting Request')
                      <button class="btn btn-primary" onclick="viewApplicant({{$job['id']}})">View Applicants </button>
                      <button class="btn btn-primary btn-danger" onclick="cancelRequest({{$job['id']}})">Cancel</button>
                      @elseif($job['status'] == 'Pending')
                      <button class="btn btn-success" onclick="startJob({{$job['id']}})">Start</button>
                      @else
                      <button class="btn btn-success" data-target="#exampleModalCenter" data-toggle="modal" onclick='showModal({!!$job!!})'>End</button>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                  <!-- List end -->
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<style type="text/css">
  
  .rating {
    display: inline-block;
    position: relative;
    height: 50px;
    line-height: 50px;
    font-size: 50px;
  }

  .rating label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    cursor: pointer;
  }

  .rating label:last-child {
    position: static;
  }

  .rating label:nth-child(1) {
    z-index: 5;
  }

  .rating label:nth-child(2) {
    z-index: 4;
  }

  .rating label:nth-child(3) {
    z-index: 3;
  }

  .rating label:nth-child(4) {
    z-index: 2;
  }

  .rating label:nth-child(5) {
    z-index: 1;
  }

  .rating label input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .rating label .icon {
    float: left;
    color: transparent;
  }

  .rating label:last-child .icon {
    color: #000;
  }

  .rating:not(:hover) label input:checked~.icon,
  .rating:hover label:hover input~.icon {
    color: #09f;
  }

  .rating label input:focus:not(:checked)~.icon:last-child {
    color: #000;
    text-shadow: 0 0 5px #09f;
  }

</style>

<script>
$(document).ready(function() {
});
// Start
function startJob(id) {
  form = document.createElement('form');
  // url
  form.action = '/employer/postedjob/start';
  form.method = 'POST';
  form.innerHTML = '@csrf<input name="job_id" value="'+id+'"/>';

  // the form must be in the document to submit it
  document.body.append(form);

  form.submit();
}
// Show Modal
function showModal(job) {
        console.log(job['id']);
        document.getElementsByClassName('top-title')[0].innerHTML = job['title'];
        document.getElementsByClassName('middle-title')[0].innerHTML = job['title'];
        document.getElementById('job_id').value = job['id'];

}
// End
function endJob(id) {
  form = document.createElement('form');
  // url
  form.action = '/employer/postedjob/end';
  form.method = 'POST';
  form.innerHTML = '@csrf<input name="job_id" value="'+id+'"/>';

  // the form must be in the document to submit it
  document.body.append(form);

  form.submit();
}
// View Applicants
function viewApplicant(id) {
  location.replace('applicants/'+id); 
}
// Cancel Request
function cancelRequest(id) {
  form = document.createElement('form');
  // url
  form.action = '/employer/postedjob/cancel';
  form.method = 'POST';
  form.innerHTML = '@csrf<input name="job_id" value="'+id+'"/>';

  // the form must be in the document to submit it
  document.body.append(form);

  form.submit();
}
</script>
@endpush

