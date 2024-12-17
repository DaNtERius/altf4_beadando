<?php
include('./includes/db.php');

// Check if the user is logged in
if (!isset($_SESSION['login'])) {
    // If the user is not logged in, show a login prompt with a Bootstrap-styled link
    echo '<div class="container px-4 py-5">
            <div class="alert alert-info text-center mb-4" role="alert">
                <p class="my-3">Nem vagy bejelentkezve. <br><a href="?oldal=login" class="btn btn-primary mx-2">Bejelentkezés</a></p>
            </div>
          </div>';
} else {
    // If the user is logged in, fetch and display the messages
    $sql = "SELECT username, email, subject, message, created_at FROM contact_messages ORDER BY created_at DESC";
    $result = $conn->query($sql);
    ?>
    <section>
        <div class="container px-4 py-5">
            <h2 class="text-center mb-4">Üzenetek listája</h2>
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                    <tr>
                        <th>Küldő</th>
                        <th>Email</th>
                        <th>Tárgy</th>
                        <th>Üzenet</th>
                        <th>Küldés Ideje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row['username']) . "</td>
                                    <td>" . htmlspecialchars($row['email']) . "</td>
                                    <td>" . htmlspecialchars($row['subject']) . "</td>
                                    <td>" . htmlspecialchars($row['message']) . "</td>
                                    <td>" . htmlspecialchars($row['created_at']) . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>Nincsenek üzenetek.</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php
}

$conn->close();
?>
