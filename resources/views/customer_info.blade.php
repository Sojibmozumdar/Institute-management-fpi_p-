@extends('layout.mastaring')

@section('content')

<style>
/* আপনার আগের ফর্মের বড় ডিজাইন এবং হেডারের নতুন স্টাইল */
.sojib-feedback {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    padding: 50px 0;
    display: flex;
    justify-content: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    /* ফর্মটি আবার বড় করা হলো */
    max-width: 850px; 
    border-radius: 18px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden;
}

.sojib-feedback .form-header {
    background: #d4f0d4ff;
    padding: 25px 35px;
    /* আইকন এবং টাইটেল এক লাইনে আনার জন্য */
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.sojib-feedback .form-header h3 {
    margin: 0;
    color: #1b4b1d !important;
    font-weight: bold;
    font-size: 2rem;
}

.sojib-feedback .form-header i {
    color: #1b4b1d;
    font-size: 2.5rem; /* আইকন সাইজ */
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

.sojib-feedback label {
    font-weight: 600;
    color: #1b4b1d;
    margin-bottom: 8px;
}

.sojib-feedback .form-control {
    border-radius: 10px;
    border: 1px solid #8ade91;
    padding: 12px;
}

.sojib-feedback .input-group-text {
    background-color: #f0fff0;
    border: 1px solid #8ade91;
    color: #1b4b1d;
    border-radius: 10px 0 0 10px;
}

.sojib-feedback .feedback-btn {
    background: linear-gradient(135deg, #306934ff, #2a5c2dff);
    color: #fff;
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 50px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: 0.3s;
    cursor: pointer;
    margin-top: 20px;
}

.sojib-feedback .feedback-btn:hover {
    background: #1b4b1d;
    transform: translateY(-2px);
}
</style>

<div class="sojib-feedback">
    <div class="feedback-box">
        <div class="form-header">
            <i class="bi bi-person-badge"></i>
            <h3> Profile</h3>
        </div>

        <div class="card-body px-4 py-4" style="padding-bottom: 35px !important;">
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">User Id</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-hash"></i></span>
                            <input type="text" name="customer_id" class="form-control" placeholder="01" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                            <input type="tel" name="phone" class="form-control" placeholder="+880 1XXX-XXXXXX">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Due Amount (BDT)</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                            <input type="number" step="0.01" name="due_amount" class="form-control" placeholder="0.00">
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Full Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                            <textarea name="address" class="form-control" rows="3" placeholder="Street, City, State, ZIP"></textarea>
                        </div>
                    </div>

                    <div class="col-12 mt-4 text-center">
                        <button type="submit" class="feedback-btn">
                            Save Information
                        </button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div> 

@endsection