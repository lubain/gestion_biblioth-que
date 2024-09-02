<div class="container mt-3 mb-4" id="contact">
    <div class="card shadow p-3 mb-5 bg-body-tertiary">
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltipUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea class="form-control" placeholder="Mettez vos commentaire ici" id="comments" required></textarea>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" placeholder="Mettez vos messages ici" id="message" required></textarea>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-success" type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>