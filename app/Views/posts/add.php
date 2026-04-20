<?php return ["body" => function ($opt) { ?>



    <div id="create_post"></div>


    <script>
        var posts_create_form = Z.Forms.create({
            dom: "create_post"
        });

        posts_create_form.createField({
            name: "z_user_id",
            type: "text",
            value: "1",
            required: true
        });
        posts_create_form.createField({
            name: "language",
            type: "text",
            value: "de",
            required: true
        });

        posts_create_form.createField({
            name: "title",
            type: "text",
            text: "Titel",
            required: true
        });
        posts_create_form.createField({
            name: "subtitle",
            type: "text",
            text: "Untertitel",
            required: false
        });
        posts_create_form.createField({
            name: "content",
            type: "textarea",
            text: "Inhalt des Posts",
            required: true
        });
    </script>
<?php }]; ?>