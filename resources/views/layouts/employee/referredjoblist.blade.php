
@extends('layouts.employee.employeenavbar')

@section('title', 'Page Title')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-dark">Reffered Job List</h1>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Description</th>
                                <th>Employer</th>
                                <th>Refferer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tukang Potong Rumput</td>
                                <td>Dibutuhkan seorang untuk memotong rumput.</td>
                                <td>Johnson &amp; Johnson</td>
                                <td>Mark Jones</td>
                                <td class="">
                                    <a class="btn btn-primary btn-outline-success" href="#">Accept</a>
                                    <a class="btn btn-primary btn-outline-danger" href="#">Decline</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Supir pengganti</td>
                                <td>Dibutuhkan seorang untuk memotong rumput.</td>
                                <td>Joe Doe</td>
                                <td>Clare Meek</td>
                                <td>
                                    <a class="btn btn-primary btn-outline-success" href="#">Accept</a>
                                    <a class="btn btn-primary btn-outline-danger" href="#">Decline</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cashier</td>
                                <td>Dibutuhkan seorang untuk mengatur kasir.</td>
                                <td>Tea Garden</td>
                                <td>Gus Gus</td>
                                <td>
                                    <a class="btn btn-primary btn-outline-success" href="#">Accept</a>
                                    <a class="btn btn-primary btn-outline-danger" href="#">Decline</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Waiter</td>
                                <td>Dibutuhkan seseorang untuk melayani tamu.</td>
                                <td>Carl Johnson</td>
                                <td>Maddie</td>
                                <td>
                                    <a class="btn btn-primary btn-outline-success" href="#">Accept</a>
                                    <a class="btn btn-primary btn-outline-danger" href="#">Decline</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Entertaiment Pesta</td>
                                <td>Dibutuhkan seorang untuk menghibur mantan.</td>
                                <td>Andy Mars</td>
                                <td>James Brown</td>
                                <td>
                                    <a class="btn btn-primary btn-outline-success" href="#">Accept</a>
                                    <a class="btn btn-primary btn-outline-danger" href="#">Decline</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
});
</script>
@endpush
