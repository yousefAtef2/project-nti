@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">إضافة سجل جديد</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        <div class="mb-3 text-end">
                            <label for="title" class="form-label">title</label>
                            <input type="text" name="title" id="title" class="form-control text-end" required>
                        </div>

                        <div class="mb-3 text-end">
                            <label for="content" class="form-label">المحتوى</label>
                            <textarea name="content" id="content" rows="5" class="form-control text-end" required></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary">إلغاء</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
