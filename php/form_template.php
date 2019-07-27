<tr>
    <td style>
        <label onclick="name.focus();">Name</label>
    </td>
    <td>
        <input type="text" id="name" name="name" placeholder="Enter your name.." pattern="[A-Za-z\s.'-]*" required>
    </td>
</tr>
<tr>
    <td>
        <label onclick="email.focus();">Email</label>
    </td>
    <td>
        <input type="email" id="email" name="email" placeholder="Enter your email address.." required>
    </td>
</tr>
<tr>
    <td>
        <label onclick="phone.focus();">Phone Number</label>
    </td>
    <td>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number.." pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" required>
    </td>
</tr>