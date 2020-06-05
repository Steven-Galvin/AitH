<form method="post" action=" " id="registration-form">

    <!-- Honeypot Field -->

    <input type="text" name="honeypot" id="honeypot" value="" alt="If you fill this field out then your email will not be sent" hidden/>
    
    <!-- User Name -->

    <label hidden for="user-name">Full Name</label>
    <input class="form-item-structure form-item-skin" type="text" name="user-name" id="user-name" placeholder="What's your full name?" required>
    <br>

    <!-- User Age -->

    <label hidden for="user-age">Age</label>
    <input class="form-item-structure form-item-skin" type="number" name="user-age" id="user-age" placeholder="How old are you?" required>
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

    <!-- Emergency Contact Name -->

    <label hidden for="user-emergency-contact-name">Emergency Contact Name</label>
    <input class="form-item-structure form-item-skin" type="text" name="user-emergency-contact-name" id="user-emergency-contact-name" placeholder="Who is your emergency contact?" required>
    <br>

    <!-- Emergency Contact Number -->

    <label hidden for="user-emergency-contact-number">Emergency Contact Number</label>
    <input class="form-item-structure form-item-skin" type="tel" name="user-emergency-contact-number" id="user-emergency-contact-number" placeholder="Emergency contact's number?" required>
    <br>

    <!-- Gender Identity -->

    <label for="user-identity">How do you identify?</label>
    <br>
    <div class="radio-container form-item-structure">
        <input type="radio" name="user-identity" id="male" value="Male" checked>
        <label for="male">Male</label>
    </div>
    <div class="radio-container form-item-structure">
        <input type="radio" name="user-identity" id="female" value="Female">
        <label for="female">Female</label>
    </div>
    <div class="radio-container form-item-structure">
        <input type="radio" name="user-identity" id="other" value="Non-Binary/Other">
        <label for="other">Non-Binary/Other</label>
    </div>

    <!-- Saturday Events Registered For -->

    <label for="user-sat-events[]">Which Saturday events do you want to register for?</label>
    <br>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sat-events[]" id="long-course" value="Long Course Triathalon">
        <label for="long-course">Long Course Triathalon</label>
    </div>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sat-events[]" id="olympic" value="Olympic Triathalon">
        <label for="female">Olympic Triathalon</label>
    </div>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sat-events[]" id="ten-k" value="10K">
        <label for="ten-k">10K</label>
    </div>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sat-events[]" id="half-marathon" value="Half Marathon">
        <label for="half-marathon">Half Marathon</label>
    </div>

    <!-- Sunday Events Registered For -->

    <label for="user-sun-events[]">Which Sunday events do you want to register for?</label>
    <br>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sun-events[]" id="sprint-triathalon" value="Sprint Triathalon">
        <label for="sprint-triathalon">Sprint Triathalon</label>
    </div>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sun-events[]" id="try-a-tri" value="Try-a-Tri">
        <label for="try-a-tri">Try-a-Tri</label>
    </div>
    <div class="checkbox-container form-item-structure">
        <input type="checkbox" name="user-sun-events[]" id="splash-n-dash" value="Splash n Dash">
        <label for="splash-n-dash">Splash n Dash</label>
    </div>

    <!-- Special Accommodations -->

    <label hidden for="user-accommodation">Need special accommodations?</label>
    <textarea class="form-item-structure form-item-skin" name="user-accommodation" id="user-accommodation" cols="30" rows="10" placeholder="How can we accommodate you?"></textarea>

    <!-- Submit Button -->

    <input class="main-button" id="submit" type="submit" value="Submit">
</form>