<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher and Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            width: 80%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Teacher and Student Information</h1>

        <div class="info">
            <?php
            require_once 'Teacher.php';
            require_once 'Student.php';

            $teacher = new Teacher("Mr. Smith", 40, "Mathematics");
            echo "<p><strong>Teacher:</strong> " . $teacher->introduce() . "</p>";

            $student = new Student("Alice", 16, 10);
            echo "<p><strong>Student:</strong> " . $student->introduce() . "</p>";
            ?>
        </div>


        <h2>Math Teachers Over 40 Years Old</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Subject</th>
            </tr>
            <?php
            // Tạo danh sách các đối tượng Teacher
            $teachers = [
                new Teacher("Mr. Smith", 40, "Mathematics"),
                new Teacher("Ms. Johnson", 45, "Mathematics"),
                new Teacher("Mr. Brown", 38, "Physics"),
                new Teacher("Mrs. Davis", 50, "Mathematics"),
                new Teacher("Mr. Wilson", 55, "Chemistry")
            ];

            // Tìm các giáo viên trên 40 tuổi và dạy môn Toán
            $mathTeachersOver40 = array_filter($teachers, function($teacher) {
                return $teacher->getAge() > 40 && $teacher->getSubject() === "Mathematics";
            });

            // Hiển thị các giáo viên phù hợp
            foreach ($mathTeachersOver40 as $teacher) {
                echo "<tr>";
                echo "<td>" . $teacher->getName() . "</td>";
                echo "<td>" . $teacher->getAge() . "</td>";
                echo "<td>" . $teacher->getSubject() . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>