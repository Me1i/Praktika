@extends('blog.master')
@section('title', 'Contact Page')

@section('content')
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row justify-content-center align-items-center" >
            <div class="col-md-6">
                <div class="mail_section">
                    <h1 class="contact_taital">Contact us</h1>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST" class="contact_form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" required class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact_section {
        padding: 50px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .mail_section {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .contact_taital {
        margin-bottom: 20px;
        text-align: center;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        display: block;
        margin: 0 auto;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 4px;
    }
</style>
@endsection
