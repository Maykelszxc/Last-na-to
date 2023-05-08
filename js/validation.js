const checker = new JustValidate("#sign-up");

checker
    .addField("#name", [
        {
            rule: "required"
        }
    ])
    .addField("#username", [
        {
            rule: "required"
        }
    ])

    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        }
    ])
    .addField("#passwords", [
        {
            rule: "required"
        },
        {
            rule: "strongPassword"
        }
        
    ])

    .onSuccess((event) => {
        document.getElementById("sign-up").submit();
    });