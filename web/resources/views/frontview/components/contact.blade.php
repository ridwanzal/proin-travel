<section class="section__contact" style="background-color:#FFF;" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="row">
                    <div class="col col-12">
                        <div class="ps-md-5 pe-md-5 pt-5">
                            <label class="text__label">Contact us for inquiries and price quotes</label>
                            <h2 class="mb-4">Contact Form</h2>
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('contact.store') }}#contact">
                                <div class="form-group">
                                    <!-- CROSS Site Request Forgery Protection -->
                                    @csrf
                                    <input type="text" name="email" placeholder="Your Name"
                                        class="form-control mb-3" required>
                                    <input type="text" name="name" placeholder="Your Email"
                                        class="form-control mb-3" required>
                                    <div class="row">
                                        <div class="col col-12 col-lg-6">
                                            <input type="text" name="company_name" placeholder="Your Company Name"
                                                class="form-control mb-3" required>
                                        </div>
                                        <div class="col col-12 col-lg-6">
                                            <input type="text" name="country" placeholder="Country"
                                                class="form-control mb-3" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col col-12 col-lg-6">
                                            <select class="form-select mb-3" name="needs"
                                                placeholder="What do you need" aria-label="Filter select" required>
                                                <option value="">What do you need</option>
                                                <option value="Yft-Loin-Frozen">YFT Loin Frozen</option>
                                                <option value="Yft-Loin-Fresh">YFT Loin Fresh</option>
                                                <option value="Yft-Product-Frozen">YFT Product Frozen</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col col-12 col-lg-6">
                                            <input type="number" name="qty" class="form-control mb-3"
                                                placeholder="Quantity" required>
                                        </div>
                                        <div class="col col-12 col-lg-12">
                                            <input type="text" name="subject" placeholder="Subject"
                                                class="form-control mb-2" required>
                                        </div>
                                    </div>
                                    <textarea rows="3" name="message" placeholder="Write your message" class="form-control mb-3 mb-md-3" required></textarea>
                                    <button name="send" type="submit"
                                        class="btn btn-warning ps-5 pe-5 mb-4">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-6" style="padding-right:0;">
                <div style="width: 100%"><iframe loading="lazy" width="100%" height="650" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=550&amp;hl=en&amp;q=%20Jl.%20Raya%20Pati%20-%20Juwana%20No.KM.1,%20Area%20Tambak,%20Growong%20Lor,%20Kec.%20Juwana,%20Kabupaten%20Pati,%20Jawa%20Tengah%2059185+(PT.Sinar%20Bulan%20Purnama%20(IGLOO%20Coldstorage))&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
            </div>
        </div>
    </div>
</section>
