<?php namespace Clix\Columnist\View;

    use Clix\Columnist\Contracts\View;

    class LaravelView implements View
    {

        protected $variables;

        protected $template;

        /**
         * @param array $var
         * @return mixed
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function setVariables(array $var)
        {
            $this->variables = $var;
            return $this;
        }

        /**
         * @param string $template
         * @return mixed
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function setTemplate($template)
        {
            $this->template = $template;
            return $this;
        }

        /**
         * @return mixed
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function render()
        {
            return \View::make($this->template, $this->variables);
        }
    }
