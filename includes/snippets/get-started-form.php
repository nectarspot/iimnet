<a name="start-your-project" class="fixed-header-part"></a>
<div class="contact-form ptb-5 wow fadeInLeft" data-wow-duration="2s">
    <div class="container-fluid full-wrapper">
        <div class="container">
            <center><h2 class="sub-heading blue-font">Start <span class="uline">Your Project</span></h2></center>
           <form target="hidden_iframe" onsubmit="submitted=true;" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
               <div class="row">
                   <div class="col-md-6">
                   <label for="name" class="hidden-label">Name*</label>
                <input type="text" name="name" class="form-input" id="name" required placeholder="Name*">
                   </div>
                   <div class="col-md-6">
                   <label for="email" class="hidden-label">Email*</label>
                <input type="email" name="email" class="form-input" id="email" required placeholder="Email*"> 
                   </div>
                   <div class="col-md-6">
                   <label for="phone" class="hidden-label">Phone (Optional)</label>
                <input type="text" name="custom_phone_number" class="form-input" id="phone" placeholder="Phone (Optional)"> 
                   </div>
                   <div class="col-md-6">
                   <label for="btc" class="hidden-label">Best Time to Call Back (Optional)</label>
                <input type="text" name="custom_best_time_to_call" class="form-input" id="btc" placeholder="Best Time to Call Back (Optional)"> 
                   </div>
                   <div class="col-md-6">
                   <label for="company" class="hidden-label">Company (Optional)</label>
                <input type="text" name="custom_company" class="form-input" id="company" placeholder="Company (Optional)">
                   </div>
                   <div class="col-md-6">
                   <label for="url" class="hidden-label">Website (Optional)</label>
                <input type="text" name="custom_website_url" class="form-input" id="url" placeholder="Website (Optional)"> 
                   </div>
                   
                   <div class="col-md-12">
                   <!-- <label for="project-details">Project Details*</label> -->
                    <textarea name="custom_comment" class="form-textarea" required id="project-details" cols="30" rows="10" placeholder="Please provide details about your project*"></textarea>       
                    </div>
                    <div class="col-lg-12">
                    <span class="tnc-span">By clicking below submit, you are agreeing to our <a href="/privacy-policy-at-nectarspot-inc" aria-label="Privacy Policy"><u>Terms of Use and Privacy Policy</u></a></span>
                   </div>
                   <div class="col-lg-12">
                       <!-- List token --> <!-- Get the token at: https://app.getresponse.com/campaign_list.html --> 
                       <input type="hidden" name="campaign_token" value="QO0yi" /> 
                       <!-- Add subscriber to the follow-up sequence with a specified day (optional) --> 
                       <input type="hidden" name="start_day" value="0" /> <!-- Subscriber button -->
                       <button type="submit" value="Submit" class="form-submit-btn">Submit ➞</button>
                   </div>
               </div>
         </form>

        </div>
    </div>
</div>
