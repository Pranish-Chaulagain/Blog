@extends('layouts.app')
@section('content')

<div class="container pt-5">
    <div class="contact-wrapper">
        <h2 class="text-center mb-4">Get in touch</h2>
        <p style="font-weight: bold;">
            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
            laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies
            nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
            sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
            Maecenas nec odio et ante tincidunt tempus.
        </p>

        <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.5483183720994!2d87.27230305074333!3d26.662940677134035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6da4ff651adf%3A0xb318fbb46292c76b!2sItahari%20Chowk!5e0!3m2!1sen!2snp!4v1677992428999!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <p class="mt-1">
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
            tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
            porttitor eu, consequat vitae, eleifend ac, enim.
        </p>

        <form class="mt-5" action="/save-contact" method="POST">
            @csrf
            <div class="mb-3">
                <label style="font-weight: bold;" class="form-label ps-2">Your name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label style="font-weight: bold;" class="form-label ps-2">Your Email</label>
                <input name="email" type="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label style="font-weight: bold;" class="form-label ps-2">Subject</label>
                <input name="subject" type="text" class="form-control" placeholder="Enter your subject" required>
            </div>
            <div class="mb-3">
                <label style="font-weight: bold;" class="form-label ps-2">Message</label>
                <textarea name="message" rows="5" type="text" class="form-control" placeholder="Enter your message" required></textarea>
            </div>
            <div class="mb-3">
                <input class="btn btn-dark" type="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</div>

@endsection
