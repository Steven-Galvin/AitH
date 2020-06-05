<form method="post" action=" " id="contact-form">

    <!-- Honeypot Field -->
    <input type="text" name="honeypot" id="honeypot" value="" alt="If you fill this field out then your email will not be sent" hidden/>
    
    <!-- User Name -->

    <label hidden for="user-name">Full Name</label>
    <input class="form-item-structure form-item-skin" type="text" name="user-name" id="user-name" placeholder="What's your full name?" required>
    <br>

    <!-- User Email -->

    <label hidden for="user-email">Email</label>
    <input class="form-item-structure form-item-skin" type="email" name="user-email" id="user-email" placeholder="What's your email?" required>
    <br>

    <!-- User Role -->

    <label for="user-role">Which role describes you best?</label>
    <br>
    <div class="radio-container form-item-structure">
        <input type="radio" name="user-role" id="athlete" value="Athlete" checked>
        <label for="athlete">Athlete</label>
    </div>
    <div class="radio-container form-item-structure">
        <input type="radio" name="user-role" id="volunteer" value="Volunteer">
        <label for="volunteer">Volunteer</label>
    </div>
    <div class="radio-container form-item-structure">
        <input type="radio" name="user-role" id="interested-party" value="Interested Party">
        <label for="interested-party">Interested Party</label>
    </div>

    <!-- Questions or Comments -->

    <label hidden for="user-comment">Questions or Comments?</label>
    <textarea class="form-item-structure form-item-skin" name="user-comment" id="user-comment" cols="30" rows="10" placeholder="How can we help you?" required></textarea>

    <!-- Submit Button -->

    <input class="main-button" id="submit" type="submit" value="Submit">
</form>