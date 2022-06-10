<?php
include('common.php');
outputHeader("Registration");
?>
<!-- Link to registration specific style sheet -->
<link rel="stylesheet" href="/CSS/registration.css">
<?php
outputNav("Registration");
?>
<div class="content">
    <!-- Creates html for the grey bounding box for the reg page  -->
    <div class="regPage">
        <!-- Creates registration text div -->
        <div id="regText">REGISTRATION:</div>
        <!-- Input form for capturing user input  -->
        <form id="regInputs">
            <!-- Creates row elements containing text input field and space for a check or error mark  -->
            <div class="row">
                <div class="text">FIRST NAME:</div>
                <input type="text" class="inputs" id="firstName" name="firstName" placeholder="First Name">
                <div class="checkmarkSpacer"></div>
            </div>
            <div class="row">
                <div class="text">LAST NAME:</div>
                <input type="text" class="inputs" id="lastName" name="lastName" placeholder="Last Name/Surname">
                <div class="checkmarkSpacer"></div>
            </div>
            <div class="row">
                <div class="text">EMAIL ADDRESS:</div>
                <input type="text" class="inputs" id="emailAddress" name="emailAddress" placeholder="Email Address">
                <div class="checkmarkSpacer"></div>
            </div>
            <!-- Date of birth element has 3 inputs in the row instead of the usual 1  -->    
            <div class="row">
                <div class="text">DATE OF BIRTH:</div>
                <div class = inputs>
                    <input type="text" class="inputsInner" id="dobDay" name="dobDay" placeholder="DD">
                    <input type="text" class="inputsInner" id="dobMonth" name="dobMonth" placeholder="MM">
                    <input type="text" class="inputsInner" id="dobYear" name="dobYear" placeholder="YYYY">
                </div>
                <div class="checkmarkSpacer"></div>
            </div>
            <!-- Spacer element used to create a divide between passwords and previous input elements  -->
            <div class="regSpacer"></div>
            <div class="row">
                <div class="text">PASSWORD:</div>
                <input type="password" class="inputs" id="password" name="password" placeholder="password">
                <div class="checkmarkSpacer" id="passwordCheck"></div>
            </div>   
            <div class="row">
                <div class="text">CONFIRM<br>PASSWORD:</div>
                <input type="password" class="inputs" id="confirmPassword" name="confirmPassword" placeholder="password">
                <div class="checkmarkSpacer" id="passwordConfirmCheck"></div>
            </div>
            <!-- div class containing instruction in reference to password format -->
            <div class="instruction">Password must be at least 8 characters long and must include 
                atleast one Uppercase letter and atleast one number. 
            </div>   
            <div class="row">
                <div class="text">USERNAME:</div>
                <input type="text" class="inputs" id="username" name="username" placeholder="username">
                <div class="checkmarkSpacer" id="usernameCheck"></div>
            </div>
            <!-- div class containing instruction in reference to username format -->
            <div class="instruction">Username must be between 4-10 characters long and it must begin with a letter</div>
            <!-- terms of service title div  -->
            <div class="termText">TERMS OF SERVICE</div>
            <!-- div containing terms of service and their formatting  -->
            <div class="terms">
                By using any web site offered by us, including, but not limited to, Tetris.com (“Site”),
                you agree to the following Terms of Use (“Terms of Use”), which constitute an agreement between
                you and the respective owners and operators of the Site. We may change these terms from time to time. 
                You can view the most current version by clicking on a link at the bottom of any page on the Site. By using
                the Site, you agree to these Terms of Use. If you do not agree to all of these Terms of Use, do not use this Site.
                <br><br>
                Reference to “we” or “us” refers to The Tetris Company, LLC and its affiliates and agents, including, without limitation, 
                Blue Planet Software, Inc. and each of its members, directors, officers, employees and agents.
                <br><br>
                Scope of these Terms of Use. We may have other web sites that are covered by different terms of use. In such case,
                the terms of use for these other sites will be available on the home page of each such site and those terms of use shall
                control with respect to such site.
                <br><br>
                No Warranties. WE MAKE NO EXPRESS OR IMPLIED WARRANTIES, COVENANTS OR REPRESENTATIONS OF ANY KIND WITH RESPECT TO THE SITE,
                THE SERVICES OFFERED THEREON (“SERVICE”), SITE CONTENT, THIRD PARTY CONTENT OR ANY OTHER CONTENT. WE EXPRESSLY DISCLAIM ALL WARRANTIES
                OF ANY KIND, EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR
                A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT, WITH REGARD TO THE SITE, THE SERVICES OFFERED THEREON, THE SITE CONTENT, THIRD PARTY CONTENT
                AND ANY OTHER CONTENT, AND ANY PRODUCT OR SERVICE FURNISHED OR TO BE FURNISHED FROM OR ON THE SITE. WE DO NOT WARRANT: THAT THE FUNCTIONS PERFORMED
                BY THE SITE OR THE SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE OR ERROR-FREE; OR THAT DEFECTS IN THE SITE OR THE SERVICES WILL BE CORRECTED; OR THE
                ACCURACY OR COMPLETENESS OF THE SITE CONTENT, THIRD PARTY CONTENT, OR ANY OTHER CONTENT; OR THAT ANY ERRORS IN THE SITE CONTENT, THIRD PARTY CONTENT 
                OR OTHER CONTENT WILL BE CORRECTED. THE SITE, THE SERVICES OFFERED THEREON, AND THE SITE CONTENT AND OTHER CONTENT ARE PROVIDED ON AN “AS IS”, “WHERE IS”,
                “AS AVAILABLE” AND “WITH ALL FAULTS” BASIS. SOME STATES DO NOT ALLOW THE DISCLAIMER OF IMPLIED WARRANTIES, SO THE FOREGOING DISCLAIMER MAY NOT APPLY TO YOU. 
                THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO HAVE OTHER LEGAL RIGHTS THAT VARY FROM STATE TO STATE.
                <br><br>
                IN NO EVENT WILL WE BE LIABLE FOR ANY DAMAGES WHATSOEVER, INCLUDING, BUT NOT LIMITED TO ANY DIRECT, INDIRECT, GENERAL, SPECIAL, COMPENSATORY, INCIDENTAL, CONSEQUENTIAL,
                EXEMPLARY OR OTHER DAMAGES ARISING OUT OF (I) YOUR CONDUCT OR THAT OF ANYONE ELSE IN CONNECTION WITH USE OF THE SITE, THE SERVICES OFFERED THEREON OR THIS AGREEMENT (II) INABILITY
                TO USE THE SITE, THE SERVICES OFFERED THEREON, THE SITE CONTENT OR ANY OTHER CONTENT, (III) ANY TRANSACTION CONDUCTED THROUGH OR FACILITATED BY THE SITE; (IV) ANY CLAIM ATTRIBUTABLE
                TO ERRORS, OMISSIONS, OR OTHER INACCURACIES IN THE SITE, THE SERVICES, THE SITE CONTENT AND/OR ANY OTHER CONTENT, (V) UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR INFORMATION, OR DATA,
                OR (VI) ANY OTHER MATTER RELATING TO THE SITE, THE SERVICES OFFERED THEREON OR ANY OTHER CONTENT, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. IF YOU ARE DISSATISFIED
                WITH THE SITE, THE SERVICES, SITE CONTENT OR ANY OTHER CONTENT, OR WITH THE TERMS OF USE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO CEASE USING THE SITE. SOME STATES DO NOT ALLOW THE EXCLUSION
                OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, AND THEREFORE SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU. IN SUCH STATES THE SITE’S LIABILITY IS LIMITED AND WARRANTIES
                ARE EXCLUDED TO THE GREATEST EXTENT PERMITTED BY LAW, BUT SHALL, IN NO EVENT, EXCEED ONE HUNDRED DOLLARS ($100.00). IF YOU HAVE A DISPUTE WITH US, YOU RELEASE US (AND OUR MEMBERS, DIRECTORS, OFFICERS,
                EMPLOYEES AND AGENTS) FROM CLAIMS, DEMANDS AND DAMAGES (ACTUAL AND CONSEQUENTIAL) OF EVERY KIND AND NATURE, KNOWN AND UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH SUCH DISPUTE. YOU AGREE TO
                INDEMNIFY AND HOLD US (AND OUR MEMBERS, DIRECTORS, OFFICERS, EMPLOYEES AND AGENTS), HARMLESS FROM ANY CLAIM OR DEMAND, INCLUDING ATTORNEYS’ FEES, MADE BY ANY THIRD PARTY DUE TO OR ARISING OUT OF (A) YOUR
                BREACH OF THIS AGREEMENT, OR YOUR VIOLATION OF ANY LAW OR THE RIGHTS OF A THIRD PARTY (B) YOUR USE, MISUSE, OR INABILITY TO USE THE SITE, THE SERVICES, OR THE SITE CONTENT OR ANY VIOLATION BY YOU OF THIS AGREEMENT.
                <br><br>
                <!-- ordered list element used to give terms numbered bullet point format  -->
                <ol>
                    <li>Proprietary Rights. You acknowledge and agree that the Site contains proprietary information that is protected under U.S. and
                        international intellectual property laws, including the laws of copyright and trademark. Except as expressly authorized by us
                        or our licensors, you agree not to sell, rewrite, modify,redistribute, create derivative works from the Site content in whole
                        or in part.</li>
                        <br>         
                    <li>You may look at the Site online, download individual pages to your personal or handheld computer for later reading, and even print
                        a copy of pages for yourself. You may not remove any copyright notices from our materials. We reserve all of our other rights not
                        granted in these Terms of Use. You agree not to access the Site by any means other than through the interface that is provided by
                        us for use in accessing the Site.</li>
                        <br>
                    <li>Linking to Us. We generally don’t mind if you include a simple link from your site to the Site. However, you must first ask our permission
                        if you intend to frame the Site or incorporate pieces of it into a different site or product in such a way that is not clear to our users
                        that we are the source of the content. You are not allowed to link to us if you engage in the publication or promotion of illegal, obscene,
                        or offensive content, or if the link in any way negatively impacts on our reputation. Children’s Privacy. We are committed to protecting the privacy
                        of children. You should be aware that the Service is not intended or designed to attract children under the age of 13.</li>
                        <br>
                    <li>Laws that Govern this Agreement. We control the Site from our offices within the United States of America. The Site can be accessed from any of the United
                        States and from other countries worldwide. Since the laws of each State or country able to access the Site may differ, by accessing the Site, you and we agree
                        that the statutes and laws of the state of New York without regard to choice of law principles, will apply to all matters relating to use of the Site. No waiver
                        of any of these Terms and Conditions shall be deemed a further or continuing waiver of such term or condition or any other term or condition. We do not make any
                        representation that materials made available through the Site are appropriate or available for use in other locations, and accessing them from territories where
                        their contents are illegal is prohibited. Those who choose to access the Site from other locations do so on their own initiative and are responsible for compliance
                        with local laws. Acceptance Procedure. By accessing the Site or registering you agree with all the terms and conditions of these Terms of Use. We reserve the right,
                        in our sole discretion, to change these Terms of Use from time to time, and your continuing use of the Site constitutes your acceptance of and agreement to any changed
                        terms and conditions. Member Account, Password, And Security. If the Site requires or provides you with the option to open an account, you must complete the registration
                        process by providing us with current, complete and accurate information as prompted by the applicable registration form. You also will choose a password and a user name.
                        You are entirely responsible for maintaining the confidentiality of your password and account. Furthermore, you are entirely responsible for any and all activities that
                        occur under your account. You agree to notify us immediately of any unauthorized use of your account or any other breach of security. We will not be liable for any loss
                        that you may incur as a result of someone else using your password or account, either with or without your knowledge. However, you could be held liable for losses incurred
                        by us or another party due to someone else using your account or password. You may not use anyone else’s account at any time, without the permission of the account holder.
                        User Content. When you upload any content to the Site, or post any messages, text, or other material on the Site (including on blogs or interactive forums on the Site),
                        or submit content to us via any form of transmission, including without limitation, electronically, or through any social media network, including without limitation, Facebook,
                        Instagram, Twitter, Pinterest, etc. (“User Content”), you grant us and our affiliates a non-exclusive, royalty-free, perpetual, irrevocable and fully sublicensable right to
                        use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, perform and display such User Content throughout the world in any media, as well
                        as the right to use the name that you submit in connection with such User Content. You represent and warrant that (a) you own and control all of the rights to the User Content
                        that you post or you otherwise have the right to post such User Content to the Site; (b) the User Content is accurate and not misleading; and (c) use and posting of the User
                        Content you supply does not violate these Terms of Use and will not violate any rights of or cause injury to any person or entity.
                        We will consider requests to remove information that you make available through the Site on an individual basis (contact us via the Contact Us form).  We reserve the right
                        to edit your submission prior to publishing it, without notice to you.  Users who submit to the Site agree to the public display of their names, email addresses and contact
                        information on the Site. Please also see our Privacy Policy for an explanation of how we use your personal information and your rights to change or delete it.
                        We have no obligation to monitor User Content. However, we reserve the right to review User Content and to remove any User Content at any time and without your consent in our
                        sole discretion.  We reserve the right to terminate your access to any or all of the Service at any time, without notice, for any reason whatsoever.</li>
                        <br>
                    <li>We reserve the right at all times to disclose any information we deem necessary to satisfy any applicable law, regulation, legal process or governmental request, or to edit,
                        refuse to post or to remove any information or materials, in whole or in part, in our sole discretion. We do not control or endorse the content, messages or information found
                        in any Service and, therefore, we specifically disclaim any liability with regard to the Service and any actions resulting from your participation in any Service. Materials uploaded
                        to the Site may be subject to posted limitations on usage, reproduction and/or dissemination; you are responsible for adhering to such limitations if you download the materials. 
                        User Conduct. You agree that when using the Service, you will not post, upload, transmit, distribute, store, create, publish or otherwise make available on the Site any of the following:</li>
                        <br>
                </ol>
                
                Surveys, contests, pyramid schemes, chain letters, junk mail, spamming or any duplicative or unsolicited messages (commercial or otherwise).User Content that defames, abuses, harasses, stalks, threatens
                or otherwise violates the legal rights (such as rights of privacy or publicity) of others. Any inappropriate, profane, defamatory, obscene, indecent or unlawful topic, name, material or information. Images,
                photographs, software or other material protected by intellectual property laws, including, by way of example, and not as a limitation, copyright or trademark laws, unless you own or control the rights thereto
                or have received all necessary consent to do the same. Files that contain viruses, Trojan horses, worms, time bombs, cancelbots, corrupted files or any other similar software or programs that may damage the operation
                of another’s computer or property of another. Private information of any third party, including, without limitation, addresses, phone numbers, email addresses, social security numbers and credit card numbers. 
                User Content that contains misleading, false, or inappropriate language or statements. In addition, when using the Service, you agree that you will not:
                <br><br>
                Use any material or information, including images or photographs, which are made available through the Service, in any manner that infringes any copyright, trademark, patent, trade secret, or other proprietary right of any party. 
                Download any file posted by another user that you know, or reasonably should know, cannot be legally reproduced, displayed, performed and/or distributed in such manner. 
                Falsify or delete any copyright management information, such as author attributions, legal or other proper notices or proprietary designations or labels of the origin or source of software or other material contained in a file that is
                uploaded. Restrict or inhibit any other user from using and enjoying the Service. Violate any code of conduct or other guidelines which may be applicable for any particular Service. Harvest or otherwise collect information about others,
                including email addresses. Violate any applicable laws or regulations. Unsolicited Idea Submission Policy. Unless we explicitly state to the contrary in certain specific and limited cases, we do not accept or consider unsolicited ideas,
                including ideas for new advertising campaigns, new promotions, new products, new designs, new games or technologies, processes, materials, marketing plans or new product names. Please do not send any such idea submissions to us. The sole
                purpose of this policy is to avoid potential misunderstandings or disputes when our products or strategies might seem similar to ideas submitted. So, please do not send your unsolicited ideas to us. In the event you make such an unsolicited
                idea submission, then you acknowledge the following: (i) your submission and its contents will automatically become the property of us without any compensation to you; (ii) there is no obligation for us to review the submission; and (iii) YOU
                GRANT US A WORLDWIDE, NON-EXCLUSIVE, ROYALTY-FREE, FULLY-PAID, PERPETUAL, IRREVOCABLE, SUBLICENSABLE AND TRANSFERABLE LICENSE TO USE, MODIFY, REPRODUCE, DISTRIBUTE, PREPARE DERIVATIVE WORKS OF, DISPLAY, PERFORM AND OTHERWISE FULLY EXPLOIT ANY
                AND ALL RELATED INTELLECTUAL PROPERTY RIGHTS OF SUCH SUBMISSION.
                <br><br>
                Solicited Idea Submission Policy. This relates to those specific and limited cases where we explicitly state that we would welcome, or where we specifically invite you to submit, your ideas and comments regarding improvements, variations and/or
                new product or game ideas. In the event you make such a submission, then you acknowledge the following: (i) your submission and its contents will automatically become the property of us without any compensation to you; (ii) there is no obligation
                for us to review the submission; and (iii) YOU GRANT US A WORLDWIDE, NON-EXCLUSIVE, ROYALTY-FREE, FULLY-PAID, PERPETUAL, IRREVOCABLE, SUBLICENSABLE AND TRANSFERABLE LICENSE TO USE, MODIFY, REPRODUCE, DISTRIBUTE, PREPARE DERIVATIVE WORKS OF, DISPLAY,
                PERFORM AND OTHERWISE FULLY EXPLOIT ANY AND ALL RELATED INTELLECTUAL PROPERTY RIGHTS OF SUCH SUBMISSION. Third Party Trademarks. Any use of third party trademarks made by the Site (e.g., Apple, Google, Android, etc.) is descriptive only (i.e., for the
                purpose of describing products or services offered by the trademark owners) and such trademarks are owned by the respective trademark owners not the Site. Privacy Policy. We pay special attention to privacy issues. The purpose of our Privacy Policy is
                to identify the information we may collect about you, describe the uses we may make of your information and the security measures we take to protect it, and describe your options for controlling your information. You can review our Privacy Policy. 
                We may take any legal action we think is appropriate. If your violation of these Terms of Use causes harm to others, you agree to hold us harmless against any liability for that harm. If there is any dispute between us concerning these Terms of Use or
                your use of the Site, you and we agree to submit the dispute to non-binding mediation, followed by binding arbitration. Both the mediation and the arbitration will be governed under the rules of the American Arbitration Association, and the venue for the
                arbitration will be New York. You agree to defend, indemnify, and hold us, our respective officers, directors, employees, agents, licensors, and suppliers, harmless from and against any claims, actions or demands, liabilities and settlements including without
                limitation, reasonable legal and accounting fees, resulting from, or alleged to result from, your violation of these Terms of Use. Notice and Take Down Procedures and Copyright Agent. If you believe any materials accessible on or from the Site infringe your copyright,
                you may request removal of those materials (or access thereto) from the Site by contacting the copyright agent (identified below) and providing the following information:
                <br><br>
                Identification of the copyrighted work that you believe to be infringed. Please describe the work, and where possible include a copy or the location (e.g., URL) of an authorized version of the work. Identification of the material that you believe to be infringing and its
                location. Please describe the material, and provide us with its URL or any other pertinent information that will allow us to locate the material Your name, address, telephone number and (if available) e-mail address. A statement that you have a good faith belief that the
                complained of use of the materials is not authorized by the copyright owner, its agent, or the law. A statement that the information that you have supplied is accurate, and indicating that “under penalty of perjury,” you are the copyright owner or are authorized to act on
                the copyright owner’s behalf. A signature or the electronic equivalent from the copyright holder or authorized representative.
                <br><br>
                Should we receive a notice of infringement of copyright, we reserve the right to take down the content giving rise to the notice.  In an effort to protect the rights of copyright owners, we maintain a policy for the termination, in appropriate circumstances,
                of subscribers and account holders of the Site who are repeat infringers. Complete Agreement.  Except as expressly provided in a particular “legal notice” on the Site, these Terms of Use constitutes the entire agreement between you and us with respect to
                your use (and prior use) of the Site.
            </div>
            <!-- div containing tick box and label elements -->
            <div class="checkBox">
                <input type="checkbox" id="termBox" name="termBox" value="Accept">
                <label id="checkLabel" for="termBox">Accept terms of service</label>
            </div>
            <!-- button containing the register and login button -->
            <input type="submit" id="register" value="Register and Login">
            <!-- anchor hyperlink back to login page  -->
            <a id="logLink" href="/index.php">Already have an account? Log in</a>
        <!-- End of user input form -->
        </form>
    <!-- closes reg page -->
    </div>
<!-- closes content div -->
</div>
<?php
outputFooter();
?>