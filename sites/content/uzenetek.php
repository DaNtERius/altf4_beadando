<?php
include('./includes/db.php');
// Üzenetek lekérdezése fordított időrendben
$sql = "SELECT username, email, subject, message, created_at FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<section>
    <div class="container px-4">
        <h2 class="text-center mb-4">Üzenetek listája</h2>
        <div class="table-responsive">
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
$conn->close();
?>