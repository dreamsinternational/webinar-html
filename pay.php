<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      window.onload = function () {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
      };
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Fees</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");
      /* Reset some default styles */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "roboto", sans-serif;
      }

      /* Apply a background color and center content vertically and horizontally */
      body {
        min-height: 100vh;
        /* background-color: #f4f4f4; */
      }

      .msg-section {
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-top: 5rem; */
        position: relative;
      }

      /* Style the container as a card */
      .container {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px 5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        text-align: center;
        position: absolute;
        top: 5rem;
      }

      /* Add spacing between elements */
      .container > * {
        margin-bottom: 15px;
      }

      /* Style headings */
      h1,
      h2 {
        color: #f05b71;
      }

      a {
        text-decoration: none;
        color: #f05b71;
      }

      /* Style buttons */
      .btn {
        background-color: #fcd112;
        padding: 12px 32px;
        border-radius: 50px;
        min-height: 48px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: black;
      }

      .nav-complete {
        position: sticky;
        top: 0;
        right: 0;
        left: 0;
        background-color: #f05b71;
        z-index: 111;
      }
      nav {
        padding: 24px 5%;
        width: 100%;
        min-height: 88px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
      }

      .nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1280px;
        width: 100%;
        margin: 0 auto;
      }
      .nav-logo img {
        width: 124px;
      }

      form input {
        padding: 8px 16px;
        min-height: 48px;
        border-radius: 8px;
        border: 1px solid #cdd0e1;
        margin-bottom: 16px;
      }

      form input:focus{
        outline: none;
      }

      .cta-buttons button {
        background-color: #fcd112;
        padding: 12px 32px;
        margin-top: 1rem;
        border-radius: 50px;
        min-height: 48px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        border: none;
      }

    .input-label{
      position: relative;
      top: -8px;
    }

      @media (max-width: 460px) {
        .container {
          padding: 20px 2rem;
          top: 2rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="nav-complete">
      <nav>
        <div class="nav-container">
          <div class="nav-left">
            <div class="nav-logo">
              <img src="images/cradle-white.png" alt />
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="msg-section">
      <div class="container">
        <h1>Fees Payment</h1>
        <form method="post" name="customerData" action="ccavRequestHandler.php">
          <table align="center">
            <caption></caption>
          </table>
          <table align="center">
            <input type="hidden" name="tid" id="tid" readonly />
            <input type="hidden" name="merchant_id" value="2342100" />
            <input type="hidden" name="order_id" value="123654789" />
            <input type="hidden" name="billing_address" value="Salisbury Park"/>
            <input type="hidden" name="billing_city" value="Pune"/>
            <input type="hidden" name="billing_state" value="MH"/>
            <input type="hidden" name="billing_zip" value="411009"/>
            <input type="hidden" name="billing_country" value="India"/>
            <tr>
              <td class="input-label">Amount :</td>
              <td>
                <input
                  type="text"
                  name="amount"
                  value
                  placeholder="Enter Amount"
                />
              </td>
            </tr>
            <input type="hidden" name="currency" value="INR" />
            <input
              type="hidden"
              name="redirect_url"
              value="https://webinar.enarkuplift.in/success.php"
            />
            <input
              type="hidden"
              name="cancel_url"
              value="https://webinar.enarkuplift.in/fail.php"
            />
            <input type="hidden" name="language" value="EN" />
            <br />
            <tr>
              <td class="input-label">Name :</td>
              <td>
                <input
                  type="text"
                  name="billing_name"
                  value
                  placeholder="Enter name"
                />
              </td>
            </tr>
            <tr>
              <td class="input-label">Phone :</td>
              <td>
                <input
                  type="text"
                  name="billing_tel"
                  value
                  placeholder="Enter phone"
                />
              </td>
            </tr>
            <tr>
              <td class="input-label">Email :</td>
              <td>
                <input
                  type="text"
                  name="billing_email"
                  value
                  placeholder="Enter email"
                />
              </td>
            </tr>
            <tr>
              <br />
              <td></td>
              <td>
                <div class="cta-buttons">
                  <button
                    type="submit"
                    align="center"
                    class="btn"
                    value="CheckOut"
                  >
                    Pay Now
                  </button>
                </div>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
