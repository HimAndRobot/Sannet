<?php

/* login.html */
class __TwigTemplate_c4c918ebe0500200d257dc98e098399903d1a173c6c6ba39d7b6a60ccd0b126f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>oi</title>
</head>
<body>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html", "C:\\xampp\\htdocs\\Sannet\\view\\login.html");
    }
}
