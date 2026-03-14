<div class="contact-form-wrap">
    <div class="contact-form-area">
        <h3>Your Success Starts Here!</h3>

        <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 mb-20">
                    <div class="form-inner">
                        <label>Full Name *</label>
                        <input type="text" name="name" value="{{ old('name') }}" required>
                        @error('name')<span style="color:#ff6b6b;font-size:12px;">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="form-inner">
                        <label>Company / Organization</label>
                        <input type="text" name="company" value="{{ old('company') }}">
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="form-inner">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="form-inner">
                        <label>Company Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        @error('email')<span style="color:#ff6b6b;font-size:12px;">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-lg-12 mb-20">
                    <div class="form-inner">
                        <label>Your Subject *</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" required>
                        @error('subject')<span style="color:#ff6b6b;font-size:12px;">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-lg-12 mb-30">
                    <div class="form-inner">
                        <label>Message *</label>
                        <textarea name="message" required>{{ old('message') }}</textarea>
                        @error('message')<span style="color:#ff6b6b;font-size:12px;">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-inner">
                        <button id="contact-submit-btn" class="primary-btn2" type="submit"
                            data-text="Submit Now"><span>Submit Now</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <script>
            document.getElementById('contact-form').addEventListener('submit', function () {
                var btn = document.getElementById('contact-submit-btn');
                btn.setAttribute('data-text', 'Submitting...');
                btn.querySelector('span').textContent = 'Submitting...';
                btn.disabled = true;
            });
        </script>

        @if(session('contact_success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2 mt-4" role="alert"
            style="border-radius:10px; font-size:15px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-check-circle-fill flex-shrink-0" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div><strong>Message sent!</strong> Thank you — we'll be in touch shortly.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    </div>
</div>
