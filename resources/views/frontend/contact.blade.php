@extends('frontend.layout.masterLayout')

@section('content')
  <!-- Contact Header -->
  <section class="contact-header">
    <div class="container">
      <h1>Contact Me</h1>
      <p class="lead">I'd love to hear from you! Feel free to reach out using the form below.</p>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="container py-5">
    <div class="row">
      <div class="col-md-6 mb-4">
        <h3>Get In Touch</h3>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required />
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="What's this about?" />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Write your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>

      <div class="col-md-6">
        <h3>Contact Info</h3>
        <ul class="list-unstyled">
          <li><strong>Email:</strong> contact@myblog.com</li>
          <li><strong>Location:</strong> Dhaka, Bangladesh</li>
          <li><strong>LinkedIn:</strong> <a href="#" target="_blank">linkedin.com/in/yourprofile</a></li>
          <li><strong>GitHub:</strong> <a href="#" target="_blank">github.com/yourprofile</a></li>
        </ul>
        <div class="mt-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.877504658609!2d90.40418041544161!3d23.83067419111279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7f7aa28212f%3A0x8fb4f8c30c60f49b!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1650629334889!5m2!1sen!2sbd"
            width="100%"
            height="250"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
  </section>

@endsection