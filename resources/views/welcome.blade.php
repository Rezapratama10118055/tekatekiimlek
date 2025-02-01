<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teka-Teki Silang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1614477309152-2765c45d8ef3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: white;
    }
    .crossword-table {
      table-layout: fixed;
      width: 100%;
    }
    .crossword-table td {
      border: 2px solid #dc3545;
      height: 50px;
      text-align: center;
      vertical-align: middle;
      font-size: 1.2rem;
      font-weight: bold;
    }
    .crossword-input {
      width: 100%;
      height: 100%;
      border: none;
      text-align: center;
      font-size: 1.2rem;
      font-weight: bold;
      background-color: transparent;
      color: #dc3545;
    }
    .crossword-input:focus {
      outline: none;
    }
    .correct {
      background-color: #198754 !important;
      color: white !important;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.9);
      border: 2px solid #dc3545;
      border-radius: 15px;
    }
    .card h1, .card h5, .card p, .card ul {
      color: #dc3545;
    }
    .notification {
      margin-top: 20px;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <div class="card p-4 shadow-lg">
      <div class="text-center mb-4">
        <h1 class="text-danger">Teka-Teki Silang</h1>
        <p class="text-muted">Isi kotak-kotak kosong sesuai dengan petunjuk mendatar dan menurun!</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8">
          <table class="table crossword-table">
            <tbody>
              <tr>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="A"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="N"></td>
                <td class="bg-secondary"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="P"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="A"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="O"></td>
              </tr>
              <tr>
                <td class="bg-secondary"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="L"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="A"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="R"></td>
                <td class="bg-secondary"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="K"></td>
              </tr>
              <tr>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="M"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="E"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="R"></td>
                <td class="bg-secondary"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="H"></td>
                <td class="bg-secondary"></td>
              </tr>
              <tr>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="K"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="E"></td>
                <td class="bg-secondary"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="L"></td>
                <td class="bg-secondary"></td>
                <td><input type="text" maxlength="1" class="crossword-input" data-answer="I"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mt-4">
        <h5 class="text-danger">Petunjuk:</h5>
        <p><strong>Mendatar:</strong></p>
        <ul>
          <li>1. Simbol keberuntungan saat Imlek (5 huruf)</li>
          <li>2. Hewan dalam shio tahun ini (5 huruf)</li>
          <li>3. Warna keberuntungan Imlek (5 huruf)</li>
          <li>4. Perayaan tahun baru China (5 huruf)</li>
        </ul>
      </div>

      <div class="text-center mt-4">
        <button id="submit-btn" class="btn btn-danger">Periksa Jawaban</button>
      </div>

      <div id="notification" class="notification text-center"></div>
    </div>
  </div>

  <script>
    document.getElementById('submit-btn').addEventListener('click', function () {
      const inputs = document.querySelectorAll('.crossword-input');
      let allCorrect = true;

      inputs.forEach((input) => {
        const inputValue = input.value.trim().toUpperCase();
        const correctAnswer = input.getAttribute('data-answer');

        // Check if the input is correct
        if (inputValue === correctAnswer) {
          input.classList.add('correct');
        } else {
          input.classList.remove('correct');
          allCorrect = false; // Set to false if any answer is incorrect
        }
      });

      const notification = document.getElementById('notification');
      if (allCorrect) {
        notification.textContent = "Selamat! Semua jawaban Anda benar!";
        notification.classList.add('text-success');
        notification.classList.remove('text-danger');
      } else {
        notification.textContent = "Jawaban masih ada yang salah. Silakan periksa kembali!";
        notification.classList.add('text-danger');
        notification.classList.remove('text-success');
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
