namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{
    // ... other properties and methods

    public function class()
    {
        return $this->belongsTo(Class::class);
    }
}
