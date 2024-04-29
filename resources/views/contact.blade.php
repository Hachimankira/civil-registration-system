<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Get in touch</h1>
                                <p class="mb-4">Contact us for any kind of queries or suggestions. We are always eager to hear from you!!! </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="h-100 rounded">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14131.036667732067!2d85.32395955!3d27.69383745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a5a17cf095%3A0xae7d89f50454f655!2sSingha%20Durbar!5e0!3m2!1sen!2snp!4v1714402200555!5m2!1sen!2snp" class="rounded w-100" style="height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                {{-- <iframe class="rounded w-100" style="height: 400px;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>
                        </div>
                        <div class="col-lg-7 mt-4">
                            <form action="{{route('contact.store')}}" class="" method="POST">
                                @csrf
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4"
                                    placeholder="Your Name" name="name">
                                <input type="email" class="w-100 form-control border-0 py-3 mb-4"
                                    placeholder="Enter Your Email" name="email">
                                <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Your Message" name="message"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                    type="submit" id="toastr-success-top-right">Submit</button>
                            </form>
                            <!--modal-->
                            <x-submit-modal />
                        </div>
                        <div class="col-lg-5 mt-4">
                            <div class="d-flex p-4 rounded mb-4 bg-white items-center">
                                <i class="fa fa-address-book fa-2x text-primary me-4 pr-4" aria-hidden="true"></i>                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-2">Singha Durbar, Kathmandu</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fa fa-envelope fa-2x text-primary me-4 pr-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-2">info@example.com</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone fa-2x text-primary me-4 pr-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-2">(+012) 3456 7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
