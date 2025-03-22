<?php
include('header.php');
?>


<section class="appointment-section">
  <div class="bg-white-rounded-right">
    <div class="w-layout-blockcontainer container w-container">
      <div class="section-title text-center">
        <h2>Make an appointment</h2>
      </div>
      <div class="appointment-form-wrap">
        <div class="no-margin w-form">
          <form id="wf-form-Appointment-Form" name="wf-form-Appointment-Form" data-name="Appointment Form" method="get"
            data-wf-page-id="6645e9526da203a67fe33134" data-wf-element-id="59cb0acc-0529-62be-d131-691bb5d8f59c">
            <div class="appointment-form">
              <input class="form-input form-input-white w-input" maxlength="256" name="name" data-name="Name"
                placeholder="Patient name" type="text" id="name" required="" />
              <input class="form-input form-input-white w-input" maxlength="256" name="Email" data-name="Email"
                placeholder="Email address" type="email" id="Email-7" required="" />
              <input class="form-input form-input-white w-input" maxlength="256" name="Phone" data-name="Phone"
                placeholder="Phone number" type="tel" id="Phone" required="" />
              <input class="form-input form-input-white w-input" maxlength="256" name="Date" data-name="Date"
                placeholder="Date(DD-MM-YYYY)" type="date" id="Date" required="" />
              <div id="w-node-ab697602-67d6-91b7-40ac-e0a64f4f0df8-7fe33134" class="appointment-form-inner">
                <select id="Services" name="Services" data-name="Services" required=""
                  class="form-select form-select-white w-node-e5fcea5b-9785-1b51-672c-ff6182ce92a9-7fe33134 w-select">
                  <option value="">Select Services</option>
                  <option value="Ultrasound Services">Ultrasound Services</option>
                  <option value="igital X-Ray">Digital X-Ray</option>
                  <option value="Interventional Radiology">Interventional Radiology</option>
                  <option value="Elastography">Elastography</option>
                  <option value="FNAC">FNAC</option>
                  <option value="BIOPSY">BIOPSY</option>
                  <option value="Uroflometry">Uroflometry</option>
                  <option value="Mammography">Mammography</option>
                  <option value="Pigtail Drainage">Pigtail Drainage</option>
                  <option value="Pathology">Pathology</option>
                </select>
                <select id="Doctor" name="Doctor" data-name="Doctor" required=""
                  class="form-select form-select-white w-node-_94848820-9894-49e6-8c78-0243bc0aadb7-7fe33134 w-select">
                  <option value="">Choose doctor</option>
                  <option value="Dr. Chandan Kumar">Dr. Chandan Kumar</option>
                </select>
              </div>
              <textarea id="Message" name="Message" maxlength="5000" data-name="Message" placeholder="Appointment note"
                class="form-input form-textarea form-input-white w-node-_59cb0acc-0529-62be-d131-691bb5d8f5b1-7fe33134 w-input"></textarea>
            </div>
            <div class="appointment-form-button-wrap"><input type="submit" data-wait="Please wait..."
                class="button-primary-1 w-button" value="Make an appointment" />
              <div class="appointment-form-inner-item-wrap">
                <div>Or book on call:</div><a href="tel:+919002931542"
                  class="appointment-form-inner-item w-inline-block"><img loading="eager"
                    src="https://cdn.prod.website-files.com/6645e9526da203a67fe33132/664700515a59013d2b57a847_call-primary.svg"
                    alt="Call primary icon" class="appointment-form-inner-icon" />
                  <div>+91 90029 31542</div>
                </a>
              </div>
            </div>
          </form>
          <div class="success-message w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="error-message w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div>
        <div class="section-title text-center">
          <h3 class="heading-h4">Our locations</h3>
        </div>
        <section class="about-section">
          <div class="bg-white-rounded">
            <div class="w-layout-blockcontainer container w-container">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.2985084328925!2d88.4155176!3d26.7048572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4413f164d6bdb%3A0x681c4ef1e8c55690!2sSRI%20SCAN%20IMAGING%20%26%20DIAGNOSTIC%20SILIGURI!5e1!3m2!1sen!2sin!4v1741933143713!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>


<?php
include('footer.php');
?>