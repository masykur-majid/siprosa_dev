<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property int $total_pages
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BookFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereTotalPages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $class_name
 * @property string $vocational
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Student> $students
 * @property-read int|null $students_count
 * @property-read \App\Models\Vocation $vocations
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList whereClassName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ClassList whereVocational($value)
 */
	class ClassList extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $reading_progress_id
 * @property string $read_date
 * @property int $total_pages_read
 * @property int $last_page_read
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog getReadingLogs($readingProgressID)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereLastPageRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereReadDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereReadingProgressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereTotalPagesRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingLog whereUpdatedAt($value)
 */
	class ReadingLog extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $student_id
 * @property int $book_id
 * @property string $status
 * @property int $current_page
 * @property string $started_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Book $books
 * @property-read \App\Models\Student $students
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereCurrentPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReadingProgress whereUpdatedAt($value)
 */
	class ReadingProgress extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $nisn
 * @property string|null $nis
 * @property string $full_name
 * @property string $current_grade
 * @property string|null $classname
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ClassList|null $classLists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student addStudentToTheClass($student_id, $classname)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student countStudentsInAClass($classname)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student countStudentsNotInAClass($classname)
 * @method static \Database\Factories\StudentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student removeStudentFromTheClass($student_id)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student showStudentsBelongToTheClass($classname)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student showStudentsDoNotBelongToTheClass($classname)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereClassname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCurrentGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereNis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $vocation_code
 * @property string $vocation_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation whereVocationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vocation whereVocationName($value)
 */
	class Vocation extends \Eloquent {}
}

