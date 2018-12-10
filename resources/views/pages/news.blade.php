@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
@endsection

@section('news')
<?php
    $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=3eb2d5e47ad34c89ac518da077edc5e8');
    $urlArticlesArray = json_decode($urlArticles, true);

    $articles = $urlArticlesArray['articles'];

    for($i = 0; $i < count($articles); $i++) {
    $sites = $urlArticlesArray['articles'][$i];
    $output = "<ul>";

    echo '<div class="card mb-3">';
        echo '<img class="card-img-top" src="'.$sites['urlToImage'].'" alt="Card image cap">';
        echo '<div class="card-body">';
            echo '<h5 class="card-title"><b>'.$sites['title'].'</b></h5>';
            echo '<p class="card-text">'.$sites['description'].'</p>';
            echo '<a href="'.$sites['url'].'" target="_blank" class="btn btn-primary">Read More</a>';
        echo '</div>';
    echo '</div>';
    }
?>
@endsection