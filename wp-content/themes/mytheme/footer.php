        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">Site built by Michael T-S-F</p>
                <a href="http://tjonsienfat.net" class="navbar-btn btn-danger btn pull-left">Subscribe on youtube</a>
            </div>
        </div>
        <div class="modal fade" id="contact" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal">
                        <div class="modal-header">
                            <h4>Contact Tjon-Sien-Fat IT</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="contact-name" class="col-lg-2 control-label">Name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Full name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" id="contact-email" placeholder="You@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-msg" class="col-lg-2 control-label">Message:</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-default" data-dismiss="modal">Close</a>
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <?php wp_footer(); ?>
    </body>
</html>