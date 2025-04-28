namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServico extends Model
{
    use HasFactory;

    // Se você não precisar de timestamps, adicione: 
    // public $timestamps = false;

    protected $fillable = ['descricao'];

    // Exemplo de relacionamento de um-para-muitos com o modelo Servico
    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}
