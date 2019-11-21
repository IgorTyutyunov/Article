<?php 
function functionArticlePreview($id,$articleText,$count){
	$articleLink="ShowSelectArticle.php/?id=$id";
	if(mb_strlen($articleText)<$count)
		return $articleText;
	else{
		$articlePreview=mb_substr($articleText,0,$count);
		$massArticlePreview=explode(" ",$articlePreview);
		if($massArticlePreview[count($massArticlePreview)-1]=='')
			$i=1;
		else
			$i=0;
		$articleTextLink=$massArticlePreview[count($massArticlePreview)-3-$i]." ".$massArticlePreview[count($massArticlePreview)-2-$i]." ".$massArticlePreview[count($massArticlePreview)-1-$i];
		$articlePreview=mb_substr($articlePreview,0,(mb_strlen($articlePreview)-mb_strlen($articleTextLink))-1);
		$articlePreview=$articlePreview."<a href='$articleLink'>{$articleTextLink}...</a>";
		return $articlePreview;
	}
}

?>
