<?php


namespace App\Service;

use App\Models\Article;
use Illuminate\Support\Str;

class searchArt
{

	public static function searchByArticle(string $article)
	{
		return collect(self::category())->filter(fn($articles)=> Str::contains($articles['article'],$article))->all();
	}

	public static function category():array

	{	/*$art = Article::all();*/
		$accessoires = Article::where('categories','Accessoires')->get();
		$vetement = Article::where('categories','Vêtement')->get();
		$chaussures = Article::where('categories','Chaussures')->get();

		return [

			['Accessoires'=>$accessoires],
			['Vêtement'=>$vetement],
			['Chaussures'=>$chaussures]
		];
	}

}