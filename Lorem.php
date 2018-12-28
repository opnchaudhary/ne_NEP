<?php

namespace Faker\Provider;

class Lorem extends Base
{
    protected static $wordList = array(
        'बितेका ','पाँच ','बर्षमा ','उपचार ','सेवा ','र ','पूर्वाधारमा ','फड्को ','मार्दै ',
        'गएको ','भरतपुर','अस्पताल ','यतिबेला ','आर्थिक ','संकटबाट ','गुज्रिन ','थालेको ',
        'दिनमा ','झण्डै ','सयभन्दा ','बढी ','बिरामीले ','उपचार ','लिने ','यस ','अस्पतालको ',
        'पछिल्लो ','महिनाको ','तथ्यांक ','हेर्दा ','अस्पताल ','निरन्तर ','ओरालो ','लाग्न ',
        'थालेको ','केन्द्र ','सरकारको ','मातहतमा ','राख्ने ','कि ','प्रदेशको ','भन्ने ','विवाद ',
        'एकातिर ','बढ्दै','इतिहासमै ','पहिलोपटक ','नेपालमा ','उत्पादन ','हुने ','विजुलीको ',
        'अन्तर्राष्ट्रिय ','बजार ','सुनिश्चित ','भएको ','भारतले ','नेपालको ','विजुली ','किन्ने ',
        'गरी ','इनर्जी ','बैंकङमा ','सहमति ','जनाएको','नेपाल ','भारतबीच','इनर्जी ','बैकिङ ','गर्न ',
        'सहमति ','जुटेको ','हो','भारतको ','राजधानी ','नयाँ ','दिल्लीमा ','बुधबार ','सम्पन्न ','विद्युत ',
        'आदानप्रदान ','समिति','पावर ','एक्सेन्स ','कमिटी','पीईसी','बैठकले ','दुई ','मुलुकबीच ','इनर्जी ',
        'बैकिङ ','गर्ने ','निर्णय ','गरेको ','हो ','नायिका ','बेनिशा ','हमालको ','गतबर्ष ','झ्यानाकुटी',
        'ब्लाइन्ड','रक्स','रिलिज ','भएको ','थियो','यी ','दुबै ','चलचित्र ','बक्स ','अफिसमा ','असफल ',
        'भएपनि ','कामको ','भने ','तारिफ ','उनै ','यसपछि ','चलचित्रमा ','संझौता','उनले ','पार्टीमा ',
        'एकताको ','सन्देश ','दिनुपर्ने ','विरोधीहरुको ','अपेक्षालाई ','असफल ','बनाउनुपर्नेमा ','जोड ',
        'आफू ','पार्टी ','अध्यक्ष ','अब ','प्राप्त ','गर्नुपर्ने ','केही ','नरहेको ','तथा ','नियतबस ',
        'कुनै ','गल्ती ','नगरेको ','स्पष्टीकरण ','सालमा ','गृहमन्त्री ','हुँदा ','पनि ','आफ्नो ',
        'कामको ','जनताले ','प्रशंशा ','गरेको','पहिलोपटक','हुँदा ','पनि ','जनताबाट ','वाहवाही ','पाएको ',
        'उनले ','सुनाएका ','छन्','हटाउन ','कोको ','जानकार ','भ्रष्टाचार','अनियमिता ','बरु ','तहबाट','स्टिङ ',
        'अपरेशन ','दाबी', 'अव्यवस्थित ','बसोबासले ','चिहानसमेत ','चपेटामा ','पर्न ','थालेका','भूमाफियाले ',
        'समेत ','बाँकी ','नराखेपछि ','पछिल्लो ','वर्षयता ','मुलुकभर ','समस्या ','विकराल ','बन्दै ','गइरहेको',
        'अनलाइन','खबरमा ','यसअघि ','प्रकाशित ','समाचारमा ','धेरैको ','प्रश्न ','बस्ती ','छेउमा ','घाटमाथि ',
        'अतिक्रमण ','बसाउँदा ','विषय ','बहसको ','वर्तमान ','आवश्यकता','घाट ','वरपर','दाहसंस्कार ','स्थलमा ',
        'झगडा','दृष्टान्त ','केलाउँ'
    );

    /**
     * @example 'Lorem'
     * @return string
     */
    public static function word()
    {
        return static::randomElement(static::$wordList);
    }

    /**
     * Generate an array of random words
     *
     * @example array('Lorem', 'ipsum', 'dolor')
     * @param  integer      $nb     how many words to return
     * @param  bool         $asText if true the sentences are returned as one string
     * @return array|string
     */
    public static function words($nb = 3, $asText = false)
    {
        $words = array();
        for ($i=0; $i < $nb; $i++) {
            $words []= static::word();
        }

        return $asText ? implode(' ', $words) : $words;
    }

    /**
     * Generate a random sentence
     *
     * @example 'Lorem ipsum dolor sit amet.'
     * @param integer $nbWords         around how many words the sentence should contain
     * @param boolean $variableNbWords set to false if you want exactly $nbWords returned,
     *                                  otherwise $nbWords may vary by +/-40% with a minimum of 1
     * @return string
     */
    public static function sentence($nbWords = 6, $variableNbWords = true)
    {
        if ($nbWords <= 0) {
            return '';
        }
        if ($variableNbWords) {
            $nbWords = self::randomizeNbElements($nbWords);
        }

        $words = static::words($nbWords);
        $words[0] = ucwords($words[0]);

        return implode($words, ' ') . '.';
    }

    /**
     * Generate an array of sentences
     *
     * @example array('Lorem ipsum dolor sit amet.', 'Consectetur adipisicing eli.')
     * @param  integer      $nb     how many sentences to return
     * @param  bool         $asText if true the sentences are returned as one string
     * @return array|string
     */
    public static function sentences($nb = 3, $asText = false)
    {
        $sentences = array();
        for ($i=0; $i < $nb; $i++) {
            $sentences []= static::sentence();
        }

        return $asText ? implode(' ', $sentences) : $sentences;
    }

    /**
     * Generate a single paragraph
     *
      * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     * @param integer $nbSentences         around how many sentences the paragraph should contain
     * @param boolean $variableNbSentences set to false if you want exactly $nbSentences returned,
     *                                      otherwise $nbSentences may vary by +/-40% with a minimum of 1
     * @return string
     */
    public static function paragraph($nbSentences = 3, $variableNbSentences = true)
    {
        if ($nbSentences <= 0) {
            return '';
        }
        if ($variableNbSentences) {
            $nbSentences = self::randomizeNbElements($nbSentences);
        }

        return implode(static::sentences($nbSentences), ' ');
    }

    /**
     * Generate an array of paragraphs
     *
     * @example array($paragraph1, $paragraph2, $paragraph3)
     * @param  integer      $nb     how many paragraphs to return
     * @param  bool         $asText if true the paragraphs are returned as one string, separated by two newlines
     * @return array|string
     */
    public static function paragraphs($nb = 3, $asText = false)
    {
        $paragraphs = array();
        for ($i=0; $i < $nb; $i++) {
            $paragraphs []= static::paragraph();
        }

        return $asText ? implode("\n\n", $paragraphs) : $paragraphs;
    }

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a string made of words, sentences, or paragraphs.
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @param  integer $maxNbChars Maximum number of characters the text should contain (minimum 5)
     *
     * @return string
     */
    public static function text($maxNbChars = 200)
    {
        if ($maxNbChars < 5) {
            throw new \InvalidArgumentException('text() can only generate text of at least 5 characters');
        }

        $type = ($maxNbChars < 25) ? 'word' : (($maxNbChars < 100) ? 'sentence' : 'paragraph');

        $text = array();
        while (empty($text)) {
            $size = 0;

            // until $maxNbChars is reached
            while ($size < $maxNbChars) {
                $word   = ($size ? ' ' : '') . static::$type();
                $text[] = $word;

                $size += strlen($word);
            }

            array_pop($text);
        }

        if ($type === 'word') {
            // capitalize first letter
            $text[0] = ucwords($text[0]);

            // end sentence with full stop
            $text[count($text) - 1] .= '.';
        }

        return implode($text, '');
    }

    protected static function randomizeNbElements($nbElements)
    {
        return (int) ($nbElements * mt_rand(60, 140) / 100) + 1;
    }
}
