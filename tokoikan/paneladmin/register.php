<!DOCTYPE html>
<html>
<head>
  <title>Halaman Register</title>
  <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
  <div class="container">
    <h1>Halaman Register</h1>
    <form>
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <label for="role">Pilih peran:</label>
      <select id="role" name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
      
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
