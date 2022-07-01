<?php ?>
<div class="row align-items-center">
    <div class="col-12 text-center">
        <form method="get">
            <button class="btn btn-outline-success" name="page" value="homePage">Home Page</button>
        </form>
    </div>
</div>
<div class="row align-items-center">
    <div class=" text-center mt-5 ">
        <h1>Add a message</h1>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-7 mx-auto text-center">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="message-form" role="form" method="post">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Firstname *</label>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                   placeholder="Please enter your firstname *" required="required"
                                                   data-error="Firstname is required.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Lastname *</label>
                                            <input id="form_lastname" type="text" name="lastName" class="form-control"
                                                   placeholder="Please enter your lastname *" required="required"
                                                   data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                   placeholder="Please enter your email *" required="required"
                                                   data-error="Valid email is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea id="form_message" name="message" class="form-control"
                                                      placeholder="Write your message here." rows="4"
                                                      required="required"
                                                      data-error="Please, leave us a message."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 text-center">
                                        <input type="submit" class="btn btn-success btn-send mt-2" name="submitForm" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <<!--form method="post">
        div
        <div class="row align-items-center">
            <div class="col-12 col-md-3 offset-md-3 text-center">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                       name="firstName">
            </div>
            <div class="col-12 col-md-3 text-center">
                <input type="text" class="form-control" placeholder="Last name" aria-label="First name" name="lastName">
            </div>
            <div class="col-10 offset-1 text-center">
                <label for="messageArea" class="form-label">Write your message</label>
                <textarea class="form-control" id="messageArea" rows="3"></textarea>
            </div>
        </div>
    </form>-->
</div>
