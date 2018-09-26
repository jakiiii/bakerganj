<div class="col-md-7 main-content">
        <h1>ছাত্র ইউনিট</h1>
        <hr>
        <table  class="table table-bordered" id="data-table">
            <thead>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_published_students_unity as $u_student) { ?>
                <tr>
                    <td width="25%">
                        <img class="table-img" src="<?php echo base_url(). $u_student->student_unit_image; ?>" alt="<?php echo $u_student->student_unit_name; ?>">
                    </td>
                    <td>
                        <h3 class="media-heading"><?php echo $u_student->student_unit_name; ?></h3>
                        <p class="orange"><?php echo $u_student->student_unit_designation; ?></p>
                        <p>স্থায়ী ঠিকানাঃ <span><?php echo $u_student->student_unit_home_address; ?></span></p>
                        <p>শিক্ষা প্রতিষ্ঠানঃ <span><?php echo $u_student->student_unit_educational_institution; ?></span></p>
                        <p>ইমেইলঃ <span><?php echo $u_student->student_unit_email; ?></span></p>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div><!-- /main-content -->