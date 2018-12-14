<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (CModule::IncludeModule("iblock"))
{

    $res = CIBlockElement::GetList(
        Array(),
        Array( "IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y", "!=PROPERTY_brand"=>false ),
        Array( "PROPERTY_brand" ),
        false,
        Array( "ID", "PROPERTY_BRAND_VALUE" )
    );



    while ( $row = $res->Fetch() ){
    	$name = rus2translit( $row[ 'PROPERTY_BRAND_VALUE' ] );
    	$sub = substr( $row[ 'PROPERTY_BRAND_VALUE' ],0,1 );
    	if(!$arResult[ 'ALL_ITEMS' ][ $sub ]) {
		    $arResult[ 'ALL_ITEMS' ][ $sub ] = Array(
			    "DEPTH_LEVEL" => 1,
			    "IS_PARENT"   => "Y",
			    "NAME"        => $sub,
			    "SOURCE_NAME" => $row['PROPERTY_BRAND_VALUE'],
			    "LINK"        => "#"
		    );
	    }

	    if(substr($row[ 'PROPERTY_BRAND_VALUE' ],0,1) == $sub) {
		    array_push( $arResult[ 'ALL_ITEMS' ], Array (
			    "DEPTH_LEVEL" => 2,
			    "IS_PARENT" => "N",
			    "PARENT" => $sub,
			    "NAME" => $row[ 'PROPERTY_BRAND_VALUE' ],
			    "LINK" => "/catalog/brands/?brand_name=" . $row[ 'PROPERTY_BRAND_VALUE' ] 
		    ));
	    }
    }


    /*
     * Array
(
    [A] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => A
            [SOURCE_NAME] => Aravia
            [LINK] => #
        )

    [0] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => A
            [NAME] => Aravia
            [LINK] => /catalog/Aravia/
        )

    [1] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => A
            [NAME] => Aravia Professional
            [LINK] => /catalog/Aravia_Professional/
        )

    [B] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => B
            [SOURCE_NAME] => Batiste
            [LINK] => #
        )

    [2] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => B
            [NAME] => Batiste
            [LINK] => /catalog/Batiste/
        )

    [C] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => C
            [SOURCE_NAME] => Concept
            [LINK] => #
        )

    [3] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => C
            [NAME] => Concept
            [LINK] => /catalog/Concept/
        )

    [D] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => D
            [SOURCE_NAME] => Dikson
            [LINK] => #
        )

    [4] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => D
            [NAME] => Dikson
            [LINK] => /catalog/Dikson/
        )

    [E] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => E
            [SOURCE_NAME] => Echos Line
            [LINK] => #
        )

    [5] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => E
            [NAME] => Echos Line
            [LINK] => /catalog/Echos_Line_/
        )

    [H] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => H
            [SOURCE_NAME] => Hair Company
            [LINK] => #
        )

    [6] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => H
            [NAME] => Hair Company
            [LINK] => /catalog/Hair_Company/
        )

    [7] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => H
            [NAME] => Hair Company Professional
            [LINK] => /catalog/Hair_Company_Professional/
        )

    [I] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => I
            [SOURCE_NAME] => Indola
            [LINK] => #
        )

    [8] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => I
            [NAME] => Indola
            [LINK] => /catalog/Indola/
        )

    [9] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => I
            [NAME] => Indola Professional
            [LINK] => /catalog/Indola_Professional/
        )

    [10] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => I
            [NAME] => Inimitable
            [LINK] => /catalog/Inimitable/
        )

    [11] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => I
            [NAME] => Italwax
            [LINK] => /catalog/Italwax/
        )

    [K] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => K
            [SOURCE_NAME] => Kapous Professional
            [LINK] => #
        )

    [12] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => K
            [NAME] => Kapous Professional
            [LINK] => /catalog/Kapous_Professional/
        )

    [L] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => L
            [SOURCE_NAME] => Londa
            [LINK] => #
        )

    [13] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => L
            [NAME] => Londa
            [LINK] => /catalog/Londa/
        )

    [14] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => L
            [NAME] => Londa Professional
            [LINK] => /catalog/Londa_Professional/
        )

    [N] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => N
            [SOURCE_NAME] => Nexxt Professional
            [LINK] => #
        )

    [15] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => N
            [NAME] => Nexxt Professional
            [LINK] => /catalog/Nexxt_Professional/
        )

    [O] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => O
            [SOURCE_NAME] => Ollin
            [LINK] => #
        )

    [16] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => O
            [NAME] => Ollin
            [LINK] => /catalog/Ollin/
        )

    [17] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => O
            [NAME] => Ollin Professional
            [LINK] => /catalog/Ollin_Professional/
        )

    [P] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => P
            [SOURCE_NAME] => Periche Professional
            [LINK] => #
        )

    [18] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => P
            [NAME] => Periche Professional
            [LINK] => /catalog/Periche_Professional/
        )

    [R] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => R
            [SOURCE_NAME] => Refectocil
            [LINK] => #
        )

    [19] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => R
            [NAME] => Refectocil
            [LINK] => /catalog/Refectocil/
        )

    [S] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => S
            [SOURCE_NAME] => Schwarzkopf Professional
            [LINK] => #
        )

    [20] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => S
            [NAME] => Schwarzkopf Professional
            [LINK] => /catalog/Schwarzkopf_Professional/
        )

    [21] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => S
            [NAME] => Sibel
            [LINK] => /catalog/Sibel/
        )

    [22] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => S
            [NAME] => Skinlite
            [LINK] => /catalog/Skinlite/
        )

    [W] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => W
            [SOURCE_NAME] => Wella Professionals
            [LINK] => #
        )

    [23] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => W
            [NAME] => Wella Professionals
            [LINK] => /catalog/Wella_Professionals/
        )

    [24] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => W
            [NAME] => Wella SP
            [LINK] => /catalog/Wella_SP/
        )

    [К] => Array
        (
            [DEPTH_LEVEL] => 1
            [IS_PARENT] => Y
            [NAME] => К
            [SOURCE_NAME] => Карепрост (Careprost) Sun Pharmaceutical Ltd
            [LINK] => #
        )

    [25] => Array
        (
            [DEPTH_LEVEL] => 2
            [IS_PARENT] => N
            [PARENT] => К
            [NAME] => Карепрост (Careprost) Sun Pharmaceutical Ltd
            [LINK] => /catalog/Kareprost_(Careprost)_Sun_Pharmaceutical_Ltd/
        )

)*/


	$this->IncludeComponentTemplate();
}
?>