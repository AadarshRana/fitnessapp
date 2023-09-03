namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    // ... other properties and methods

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function schedules()
    {
        return $this->hasMany(ClassSchedule::class);
    }
}