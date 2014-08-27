package com.innova.datamining;

import weka.classifiers.bayes.NaiveBayesUpdateable;
import weka.core.Instance;
import weka.core.Instances;
import weka.core.converters.ArffLoader;

import java.io.File;

/**
 * Created by sajith on 8/27/14.
 */
public class Main {

    public static void main(String args[])throws Exception {
        ArffLoader loader = new ArffLoader();
        loader.setFile(new File("weka.txt"));
        Instances structure = loader.getStructure();
        structure.setClassIndex(structure.numAttributes() - 1);
        NaiveBayesUpdateable nb = new NaiveBayesUpdateable();
        nb.buildClassifier(structure);
        Instance current;
        while ((current = loader.getNextInstance(structure)) != null)
            nb.updateClassifier(current);

        System.out.println(nb);

    }
}
