@extends('backend.layout.master')

@section('content')

<?php
$contactUs = App\Models\ContactUs::orderBy('created_at', 'desc')->get();
$i = 1;
?>

<div class="container-fluid mt-3 px-5">
    <a class="d-flex align-items-center gap-1 go-back text-primary mb-2" href="{{ URL::previous() }}">
        <i class="bi bi-arrow-left-short"></i>Back
    </a>
    <div class="heading d-flex align-items-center justify-content-between">
        <h3 class="m-0">Contact table</h3>
    </div>
    <div class="mt-5 px-5 blog-table-container">
        <table>
            <thead class="thead-dark py-2">
                <tr>
                    <th class="id-container">SN</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>SUBJECT</th>
                    <th>MESSAGE</th>
                    <th>TIME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contactUs as $contact)
                    <tr>
                        <td class="id-container">{{ $i++}}</td>
                        <td>{{ ($contact->name) }}</td>
                        <td>{{ ($contact->email) }}</td>
                        <td>{{ ($contact->subject) }}</td>
                        <td>{{ ($contact->message) }}</td>
                        <td>{{ ($contact->created_at) }}</td>
                        <td>
                            <a href="" class="btn btn-dark">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
