<?php
/**
 * AnalyzerText package
 * 
 * @package AnalyzerText
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */

namespace AnalyzerText\Filter\WordList;

use AnalyzerText\Filter\WordList\WordList;

/**
 * Оставляет в списке междометья
 *
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 * @package AnalyzerText\Filter\WordList
 */
class Interjection extends WordList {

	/**
	 * Возвращает список слов
	 *
	 * @return array
	 */
	public function getWords() {
		return array(
			// русские междометья
			'ох', 'ого', 'ого', 'эй', 'эх', 'цып', 'брысь', 'aх', 'ух', 'брр', 'тпру', 'гм', 'дзинь', 'тс', 'цс', 'тьфу',
			'ой', 'фу', 'фи', 'ага', 'апчи', 'браво', 'ж', 'буль', 'ку', 'хлоп', 'бац', 'бух', 'шлёп', 'бум', 'бах', 'пли',
			'гав', 'мяу', 'тра', 'ишь', 'вишь', 'то-то', 'эка', 'ш', 'вот те раз', 'ну', 'типа', 'хватит', 'лады', 'ок',
			'хорош', 'короче',
			'/^а+(\-а+)*$/ui', // ААааа Аааа-а-а

			// английские междометья
			'ok', 'oh', 'ah', 'bravo',
		);
	}

}